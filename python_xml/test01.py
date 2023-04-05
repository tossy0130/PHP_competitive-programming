import xml.etree.ElementTree as ET

# XMLファイルを解析
tree = ET.parse(
    r'D:\\PHP_competitive programming\python_xml\file\\P13-11_15.xml')

# 'D:\\PHP_competitive programming\python_xml\file\\P13-11_15.xml'


# XMLを取得
root = tree.getroot()

for name in root.iter():
    print(name.text)
