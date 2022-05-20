sum = 0
path = """C:/xampp/htdocs/nikunj/3/upload-files/docx.docx"""
with open(path, 'r') as file:
    var = file.read()
    # print(var)
    data =var.replace('.',',').replace(' ',',')
    data = data.split(',')
# print(data)
    
# for i in range(5) :
for i in range(len(data)):
    # print(data[i])
    sum = sum + (int(data[i]))
# print("Total : " ,sum)
   
    # print(sum)
    # file.close()
    # pass
    
with open("download2.csv", 'w') as file:
    file.write(str(sum))
    file.close()
    pass







