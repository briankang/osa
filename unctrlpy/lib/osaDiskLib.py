#!/usr/bin/env python
#encoding=utf-8
import os  
from collections import namedtuple  
  
disk_ntuple = namedtuple('partition',  'device mountpoint fstype')  
usage_ntuple = namedtuple('usage',  'total used free percent')  

#��ȡ��ǰ����ϵͳ�����д���  
def disk_partitions(all=False):  
	"""Return all mountd partitions as a nameduple. 
	If all == False return phyisical partitions only. 
	"""  
	phydevs = []  
	f = open("/proc/filesystems", "r")  
	for line in f:  
		if not line.startswith("nodev"):  
			phydevs.append(line.strip())  
  
	retlist = []  
	f = open('/etc/mtab', "r")  
	for line in f:  
		if not all and line.startswith('none'):  
			continue  
		fields = line.split()  
		device = fields[0]  
		mountpoint = fields[1]  
		fstype = fields[2]  
		if not all and fstype not in phydevs:  
			continue  
		if device == 'none':  
			device = ''  
		ntuple = disk_ntuple(device, mountpoint, fstype)  
		retlist.append(ntuple)  
	return retlist  
#ͳ��ĳ����ʹ����������ض���  
def disk_usage(path):  
	"""Return disk usage associated with path."""  
	st = os.statvfs(path)  
	free = (st.f_bavail * st.f_frsize)  
	total = (st.f_blocks * st.f_frsize)  
	used = (st.f_blocks - st.f_bfree) * st.f_frsize  
	try:  
		percent = ret = (float(used) / total) * 100  
	except ZeroDivisionError:  
		percent = 0  	
	return usage_ntuple(total, used, free, round(percent, 1)) 
