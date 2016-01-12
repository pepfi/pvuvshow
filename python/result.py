#!/usr/bin/env python

#import md5
import os
import os.path

listfile = os.listdir("/mnt/work")
for filename in listfile:
	if len(filename) > 20:
		shellcmd0 = "./nglog " + filename + " pv" + " uv"
		os.system(shellcmd0)
		print shellcmd0 
		shellcmd1 = "wc -l " + filename + " | awk '{print $1 }'" + " >> " + filename + ".pvuv"
		os.system(shellcmd1)
		
		print shellcmd1
		shellcmd2 = "cat pv | grep apk | grep android |  awk '{print $2}'| wc -l >> " + filename + ".pvuv" 
		print shellcmd2
		os.system(shellcmd2)

                shellcmd3 = "cat uv | grep android | awk '{print $2}' | sort | uniq | wc -l >> " + filename + ".pvuv"
                print shellcmd3
                os.system(shellcmd3)
                shellcmd4 = "cat uv | grep ios | awk '{print $2}' | sort | uniq | wc -l >> " + filename + ".pvuv"
                print shellcmd4
                os.system(shellcmd4)
                shellcmd5 = "cat uv | grep windows |  awk '{print $2}' | sort | uniq | wc -l >> " + filename + ".pvuv"
                print shellcmd5
                os.system(shellcmd5)
	#break
