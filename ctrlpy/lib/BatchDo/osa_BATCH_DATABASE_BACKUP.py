#!/usr/bin/env python
#encoding=utf-8
import os,sys,time

from ctrlpy.lib import osaBatchLib

'''
	Author:		osa��Դ�Ŷ�
	Description: ���ݿⱸ��ģ��
	Create Date:	2012-05-22	
'''	

def index(rev,type,ip,x=''):
	'''
	@ ���ݿⱸ��ģ��
	return ��
	'''
	if not rev or not ip:
		return False
	if not type:
		type = 'batch'
	
	try:
		r = osaBatchLib.batchSendCmd(rev,ip,type)
	except Exception as e:
		save_log('ERROR','BATCH_DATABASE_BACKUP:'+str(e))
	#���߳��˳�
	sys.exit()
	

	
	
	
	
