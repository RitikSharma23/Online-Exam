ss=new XMLHttpRequest
ss.open("GET","api.php?obj=5",true)
ss.onload=function(){
res=JSON.parse(this.responseText)

console.log(res['data'])

div=document.getElementById("div1")
table=document.createElement('table')
table.border="1"


row=document.createElement('tr')
td=document.createElement('td')

row=document.createElement('tr')
td=document.createElement('td')
text0=document.createTextNode('Index')
td.appendChild(text0)
row.appendChild(td)

td1=document.createElement('td')
text1=document.createTextNode('User Id')
td1.appendChild(text1)

td2=document.createElement('td')
text2=document.createTextNode('Full Name')
td2.appendChild(text2)

td3=document.createElement('td')
text3=document.createTextNode('Email')
td3.appendChild(text3)

td4=document.createElement('td')
text4=document.createTextNode('Phone')
td4.appendChild(text4)


td6=document.createElement('td')
a=document.createElement("a")
text6=document.createTextNode("")
a.appendChild(text6)
td6.appendChild(a)

row.appendChild(td1)
row.appendChild(td2)
row.appendChild(td3)
row.appendChild(td6)
table.appendChild(row)
div.appendChild(table)

for(i=0;i<res['data'].length;i++){

    row=document.createElement('tr')
    td=document.createElement('td')
    
    row=document.createElement('tr')
    td=document.createElement('td')
    text0=document.createTextNode(i+1)
    td.appendChild(text0)
    row.appendChild(td)
    
    td1=document.createElement('td')
    text1=document.createTextNode(res['data'][i]['userid'])
    td1.appendChild(text1)
    
    td2=document.createElement('td')
    text2=document.createTextNode(res['data'][i]['fname']+" "+res['data'][i]['lname'])
    td2.appendChild(text2)
    
    td3=document.createElement('td')
    text3=document.createTextNode(res['data'][i]['email'])
    td3.appendChild(text3)

    td4=document.createElement('td')
    text4=document.createTextNode(res['data'][i]['phone'])
    td4.appendChild(text4)
    
    
    td6=document.createElement('td')
    a=document.createElement("a")
    a.href="f_edit.php?userid="+res['data'][i]['userid']
    text6=document.createTextNode("Edit Profile")
    a.appendChild(text6)
    td6.appendChild(a)
    
    row.appendChild(td1)
    row.appendChild(td2)
    row.appendChild(td3)
    row.appendChild(td6)
    table.appendChild(row)
    div.appendChild(table)
    
    }

}
ss.send();