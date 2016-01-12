#!/usr/bin/env python

#import md5
import hashlib
import tarfile
from oss.oss_api import *
import uuid
import os.path
from shutil import copy


oss = OssAPI("oss-cn-hangzhou-internal.aliyuncs.com","kkkkkkkkkkkkkkkkkkk","kkkkkkkkkkkkkkkkkkkkkkk")
res = oss.get_bucket("lms9-buckets-com")
marker = ""
body = res.read()
(tmp_object_name_list, marker) = get_object_list_marker_from_xml(body)
for i in tmp_object_name_list:
    object = i[0]
    desfile = "/mnt/logstashinput/osslog/"
    desfile += object
    pvuvfile = "/mnt/logstashinput/pvuv/osslog/"
    pvuvfile += object
    res = oss.get_object_to_file("lms9-buckets-com", object, pvuvfile)
    res = oss.get_object_to_file("lms9-buckets-com", object, desfile) 
    if(tarfile.is_tarfile(desfile)) :
	print desfile
	try:
	    tar = tarfile.open(desfile, "r")
            tar.extractall(path = '/mnt/logstashinput/tarosslog/')
            tar.close()
	    #print("destfile is a tar file")
	finally:
	    res = oss.delete_object("lms9-buckets-com",object)
    else :
       print("file is not a tar file")
    res = oss.delete_object("lms9-buckets-com", object)
    #print("delete file"+ (object))
 
    listfile = os.listdir("/mnt/logstashinput/tarosslog")
    for x in listfile:
        filename = "/mnt/logstashinput/tarosslog/" + x
        filetail =  str(uuid.uuid1())
        filenamedes = "/mnt/logstashinput/inputlog/"  + filetail + x
        #print filename
        #print filenamedes
        copy(filename,filenamedes)
        os.remove(filename)
   
    #break
