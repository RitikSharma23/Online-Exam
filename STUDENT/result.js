		
roll=sessionStorage.getItem("roll")
fname=sessionStorage.getItem("fname")
lname=sessionStorage.getItem("lname")
uid=sessionStorage.getItem("uid")
sem=sessionStorage.getItem("sem")
email=sessionStorage.getItem("email")
phone=sessionStorage.getItem("phone")
dev=sessionStorage.getItem("dev")

data="?roll="+roll+"&fname="+fname+"&lname="+lname+"&phone="+phone+"&email="+email+"&sem="+sem+"&uid="+uid+"&dev="+dev;

subject=[];
temp=[];
marks=[];
l=0;
ss=new XMLHttpRequest
ss.open("GET","../api/question.php?obj=3",true)
ss.onload=function(){

    res=JSON.parse(this.responseText)
    for(i=3;i<res['data'].length;i++){
    subject.push((res['data'][i]['col']).split("_"))
    temp.push((res['data'][i]['col']))
    console.log((res['data'][i]['col']))
    }
    l=temp.length;
}
ss.send()

ss=new XMLHttpRequest
ss.open("GET","resutapi.php",true)
ss.onload=function(){
    res=JSON.parse(this.responseText)

    for(i=3;i<res['data'].length;i++){
        subject[i-3].push(res['data'][(res['data'].length)-1][temp[i-3]])        
    }

for(i=0;i<subject.length;i++){
    if(subject[i][5]==-1){flag=1}else{flag=0}
}

div=document.getElementById("div1");
div.innerHTML="";

table=document.createElement('table')
table.border="1"

row=document.createElement('tr')
td=document.createElement('td')
text0=document.createTextNode("Sem")
td.appendChild(text0)
row.appendChild(td)

td0=document.createElement('td')
text0=document.createTextNode('Subject')
td0.appendChild(text0)


td1=document.createElement('td')
text1=document.createTextNode("Unit")
td1.appendChild(text1)

td5=document.createElement('td')
text5=document.createTextNode("Marks")
td5.appendChild(text5)

row.appendChild(td)
row.appendChild(td0)
row.appendChild(td1)
row.appendChild(td5)
table.appendChild(row)
div.appendChild(table)


for(i=0;i<l;i++){
    if(subject[i][5]==-1){

    }else{
row=document.createElement('tr')
td=document.createElement('td')
text0=document.createTextNode(subject[i][1])
td.appendChild(text0)
row.appendChild(td)

td0=document.createElement('td')
text0=document.createTextNode(subject[i][2])
td0.appendChild(text0)


td1=document.createElement('td')
text1=document.createTextNode(subject[i][4])
td1.appendChild(text1)

td5=document.createElement('td')
text5=document.createTextNode(subject[i][5])
td5.appendChild(text5)

row.appendChild(td)
row.appendChild(td0)
row.appendChild(td1)
row.appendChild(td5)
table.appendChild(row)
div.appendChild(table)
    }

}

}
ss.send()