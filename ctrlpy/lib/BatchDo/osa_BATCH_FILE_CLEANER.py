#!/usr/bin/env python
#encoding=utf-8
import os,sys,time
from ctrlpy.lib.osaUtil import save_log
from ctrlpy.lib import osaBatchLib

'''
	Author:		osa��Դ�Ŷ�
	Description:�ļ�����ģ��
	Create Date:	2012-05-22	
'''	

def index(rev,type,ip,x=''):
	'''
	@���������ļ�������
	return ��
	'''
	if not rev or not ip:
		return False
	if not type:
		type = 'batch'
	
	try:
		r = osaBatchLib.batchSendCmd(rev,ip,type)
	except Exception as e:
		save_log('ERROR','BATCH_FILE_CLEANER:'+str(e))
	#���߳��˳�
	sys.exit()
	
	
	
	
	
	
