		
roll=sessionStorage.getItem("roll")
fname=sessionStorage.getItem("fname")
lname=sessionStorage.getItem("lname")
uid=sessionStorage.getItem("uid")
sem=sessionStorage.getItem("sem")
email=sessionStorage.getItem("email")
phone=sessionStorage.getItem("phone")
dev=sessionStorage.getItem("dev")

data="?roll="+roll+"&fname="+fname+"&lname="+lname+"&phone="+phone+"&email="+email+"&sem="+sem+"&uid="+uid+"&dev="+dev;

l=0;
res={}
ss=new XMLHttpRequest
ss.open("GET","loadsubject.php"+data,true)
ss.onload=function(){

res=JSON.parse(this.responseText)
l=res['data'].length;



div=document.getElementById("div1")
if(l>=1){
    div.innerHTML=""
}
table=document.createElement('table')
table.border="1"


i=0
row=document.createElement('tr')
td=document.createElement('td')
text0=document.createTextNode("No")
td.appendChild(text0)
row.appendChild(td)

td0=document.createElement('td')
text0=document.createTextNode(res['data'][i]['user'])
td0.appendChild(text0)

subj="sem_"+res['data'][i]['sem']+"_"+res['data'][i]['subject']+"_unit_"+res['data'][i]['unit']

td1=document.createElement('td')
text1=document.createTextNode("Date")
td1.appendChild(text1)

td5=document.createElement('td')
text5=document.createTextNode("Subject")
td5.appendChild(text5)

td7=document.createElement('td')
text7=document.createTextNode(res['data'][i]['total'])
td7.appendChild(text7)

td9=document.createElement('td')
var a=document.createElement('a')

a.href="examlist.php"+data+"&id="+res['data'][i]['question_id']+"&subcol="+subj;
text9=document.createTextNode('Action')
a.appendChild(text9)
td9.appendChild(a)

row.appendChild(td1)
row.appendChild(td5)
row.appendChild(td9)
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

td0=document.createElement('td')
text0=document.createTextNode(res['data'][i]['user'])
td0.appendChild(text0)

subj="sem_"+res['data'][i]['sem']+"_"+res['data'][i]['subject']+"_unit_"+res['data'][i]['unit']

td1=document.createElement('td')
text1=document.createTextNode(res['data'][i]['date'])
td1.appendChild(text1)

td5=document.createElement('td')
text5=document.createTextNode(res['data'][i]['subject'])
td5.appendChild(text5)

td6=document.createElement('td')
text6=document.createTextNode(res['data'][i]['unit'])
td6.appendChild(text6)

td7=document.createElement('td')
text7=document.createTextNode(res['data'][i]['total'])
td7.appendChild(text7)

td8=document.createElement('td')
text8=document.createTextNode(res['data'][i]['status'])
td8.appendChild(text8)

td9=document.createElement('td')
var a=document.createElement('a')

a.href="examlist.php"+data+"&id="+res['data'][i]['question_id']+"&subcol="+subj;
text9=document.createTextNode('Start Exam')
a.appendChild(text9)
td9.appendChild(a)

row.appendChild(td1)
row.appendChild(td5)
row.appendChild(td9)
table.appendChild(row)
div.appendChild(table)

}



}
ss.send()

// }
