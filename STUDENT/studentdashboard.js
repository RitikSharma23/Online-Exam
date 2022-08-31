roll=document.getElementById("roll").innerHTML
fname=document.getElementById("fname").innerHTML
lname=document.getElementById("lname").innerHTML
uid=document.getElementById("uid").innerHTML
sem=document.getElementById("sem").innerHTML
email=document.getElementById("email").innerHTML
phone=document.getElementById("phone").innerHTML
dev=document.getElementById("dev").innerHTML

data="?roll="+roll+"&fname="+fname+"&lname="+lname+"&phone="+phone+"&email="+email+"&sem="+sem+"&uid="+uid+"&dev="+dev;

l=0;
res={}
ss=new XMLHttpRequest
ss.open("GET","loadsubject.php"+data,true)
ss.onload=function(){
res=JSON.parse(this.responseText)

// console.log(res['data'][1]);
l=res['data'].length;



div=document.getElementById("div1")
table=document.createElement('table')
table.border="1"



for(i=0;i<res['data'].length;i++){

var check=document.createElement("input");
check.type = "checkbox";
check.id=i
check.value=i
check.name=i
check.classList="messageCheckbox"

row=document.createElement('tr')
td=document.createElement('td')
td.appendChild(check)
row.appendChild(td)


td0=document.createElement('td')
text0=document.createTextNode(res['data'][i]['user'])
td0.appendChild(text0)


subj="sem_"+res['data'][i]['sem']+"_"+res['data'][i]['subject']+"_unit_"+res['data'][i]['unit']



td1=document.createElement('td')
text1=document.createTextNode(res['data'][i]['date'])
td1.appendChild(text1)

td2=document.createElement('td')
text2=document.createTextNode(res['data'][i]['question_id'])
td2.appendChild(text2)

td3=document.createElement('td')
text3=document.createTextNode(res['data'][i]['sem'])
td3.appendChild(text3)

td4=document.createElement('td')
text4=document.createTextNode(res['data'][i]['dev'])
td4.appendChild(text4)

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
// a.href="examlist.php?id="+res['data'][i]['question_id']
a.href="examlist.php"+data+"&id="+res['data'][i]['question_id']+"&subcol="+subj;
text9=document.createTextNode('Edit')
a.appendChild(text9)
td9.appendChild(a)

// console.log(data)


row.appendChild(td0)
row.appendChild(td1)
row.appendChild(td2)
row.appendChild(td3)
row.appendChild(td4)
row.appendChild(td5)
row.appendChild(td6)
row.appendChild(td7)
row.appendChild(td8)
row.appendChild(td9)
table.appendChild(row)
div.appendChild(table)

}






}
ss.send()

