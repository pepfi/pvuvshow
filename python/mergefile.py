#!/usr/bin/env python

#import md5
import hashlib
import tarfile
from oss.oss_api import *
import uuid
import os.path
from shutil import copy


listfile = os.listdir("/mnt/logstashinput/pvuv/osslog/")
tmp = 0
for i in listfile:
    if len(i) < 31:
	print("filename is too short")
        break
    #object = i[0]
    desfile = "/mnt/logstashinput/pvuv/osslog/"
    desfile += i
    sourcefile = "/mnt/logstashinput/pvuv/osslog/"
    sourcefile += i
    
    #print i
    print desfile
    if(tarfile.is_tarfile(desfile)) :
	tar = tarfile.open(desfile, "r")
        tar.extractall(path = '/mnt/logstashinput/pvuv/log/')
        tar.close()
	#print("destfile is a tar file")
	pre = i[0:3]
	devmac = i[4:21]
	day = i[22:32]
	#print pre
	#print devmac
	#print day
	destdir = "/mnt/logstashinput/pvuv/" + pre + "/" + devmac + "/" + day
	
	#print destdir
	if os.path.exists(destdir):
	  print("dir exist")
	  listfile2 = os.listdir("/mnt/logstashinput/pvuv/log/")
	  #tmp = 0
	  for x in listfile2:
	      #print x
	      if(x == "pv_http.log"):
		#print x
		#print("====")
		#cmd = "./nginx.pre.sh" + " "  + x + " " + "" + destdir + "/pv.log" + " " + destdir +  "/uv.log"
		#print cmd
		#os.system(cmd)
		sorcefile = "/mnt/logstashinput/pvuv/log/" + x
		destfile = destdir + "/" + x + "_" + str(tmp) + ".log"
		tmp = tmp +1
		print tmp
		print sorcefile
		print destfile
		copy(sorcefile,destfile)

	      else:
		print("!!!====")
	else:
	  os.makedirs(destdir)
	  pv = destdir + "/pv.log"
	  uv = destdir + "/uv.log"
	  #print pv
	  #print uv
	  f = open(pv, 'w')
	  f.close()
	  f = open(uv, 'w')
          f.close()	
    else :
       print("file is not a tar file")
    # delete tar.gz log
    #print destfile + " 000000000000000000"
    #print sourcefile + " 11112222222222222222"
    os.remove(sourcefile)


   
    #break
