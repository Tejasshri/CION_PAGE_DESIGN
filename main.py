import os 

def myFunc(name):
    return '.png' in name


ls = list(filter(myFunc, os.listdir("./main/")))

for file in ls :
    os.rename(f"main/{file}", f"main/assets/{file}") ;