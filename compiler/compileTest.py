import sys
import os
import subprocess

#idk im not good at python 

result = sys.argv[0]
file = sys.argv[1]
codeType = sys.argv[2]

if codeType == "C":
    subprocess.call("gcc "+file+" -o test", shell=True)
    result = subprocess.call("./test", shell=True)
    if result == result:
        print("Correct")
    else:
        print("LOL")
    subprocess.call("rm test")
else if codeType == "C++":
    subprocess.call("g++ "+file+" -o test", shell=True)
    result = subprocess.call("./test", shell=True)
    if result == result:
        print("Correct")
    else:
        print("LOL")
    subprocess.call("rm test")
