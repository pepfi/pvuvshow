#!/usr/bin/env python

#import md5
import os
import os.path

rootdir = "/mnt/logstashinput/pvuv/sys"

for parent, dirnames, filenames in os.walk(rootdir):
	for dirname in dirnames:
		destdir = os.path.join(parent,dirname)
		if len(destdir) ==  56:
			devmac = destdir[40:45]
			devtime = destdir[51:56]
			#print devmac
			#print devtime
			nginxfile = "nginx" + "-mac" + devmac + "-time" + devtime +".log"
			#print nginxfile
			#print destdir
			shellcmd1 = "cat " + destdir + "/*" + " > " + nginxfile
			print shellcmd1
			shellcmd2 = "mv " + nginxfile + " /mnt/work/"
			print shellcmd2
			os.system(shellcmd1)
			os.system(shellcmd2)
