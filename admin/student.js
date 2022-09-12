ss=new XMLHttpRequest
ss.open("GET","api.php?obj=1",true)
ss.onload=function(){
res=JSON.parse(this.responseText)


div=document.getElementById("div1")
table=document.createElement('table')
table.border="1"


row=document.createElement('tr')
    td=document.createElement('td')
    
    row=document.createElement('tr')
    td=document.createElement('td')
    text0=document.createTextNode('Enrollment No.')
    td.appendChild(text0)
    row.appendChild(td)
    
    td1=document.createElement('td')
    text1=document.createTextNode('Full Name')
    td1.appendChild(text1)
    
    td2=document.createElement('td')
    text2=document.createTextNode('Sem')
    td2.appendChild(text2)
    
    td3=document.createElement('td')
    text3=document.createTextNode('div')
    td3.appendChild(text3)
    
    td4=document.createElement('td')
    text4=document.createTextNode('Phone')
    td4.appendChild(text4)
    
    td5=document.createElement('td')
    text5=document.createTextNode('Email')
    td5.appendChild(text5)
    
    td6=document.createElement('td')
    a=document.createElement("a")
    text6=document.createTextNode("")
    a.appendChild(text6)
    td6.appendChild(a)
    
    row.appendChild(td1)
    row.appendChild(td2)
    row.appendChild(td3)
    row.appendChild(td4)
    row.appendChild(td5)
    row.appendChild(td6)
    table.appendChild(row)
    div.appendChild(table)

for(i=0;i<res['data'].length;i++){

    row=document.createElement('tr')
    td=document.createElement('td')
    
    row=document.createElement('tr')
    td=document.createElement('td')
    text0=document.createTextNode(res['data'][i]['uid'])
    td.appendChild(text0)
    row.appendChild(td)
    
    td1=document.createElement('td')
    text1=document.createTextNode(res['data'][i]['fname']+" "+res['data'][i]['lname'])
    td1.appendChild(text1)
    
    td2=document.createElement('td')
    text2=document.createTextNode(res['data'][i]['sem'])
    td2.appendChild(text2)
    
    td3=document.createElement('td')
    text3=document.createTextNode(res['data'][i]['div'])
    td3.appendChild(text3)
    
    td4=document.createElement('td')
    text4=document.createTextNode(res['data'][i]['phone'])
    td4.appendChild(text4)
    
    td5=document.createElement('td')
    text5=document.createTextNode(res['data'][i]['email'])
    td5.appendChild(text5)
    
    td6=document.createElement('td')
    a=document.createElement("a")
    a.href="s_edit.php?uid="+res['data'][i]['uid']
    text6=document.createTextNode("Edit Profile")
    a.appendChild(text6)
    td6.appendChild(a)
    
    td7=document.createElement('td')
    a=document.createElement("a")
    XC=confirm("Are you Sure You want to delete")
    a.href="api.php?uid="+res['data'][i]['uid']+"&obj=9"
    text7=document.createTextNode("Delete")
    a.appendChild(text7)
    td7.appendChild(a)
    
    row.appendChild(td1)
    row.appendChild(td2)
    row.appendChild(td3)
    row.appendChild(td4)
    row.appendChild(td5)
    row.appendChild(td6)
    row.appendChild(td7)
    table.appendChild(row)
    div.appendChild(table)
    }

}
ss.send();