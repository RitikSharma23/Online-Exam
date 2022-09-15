fname=sessionStorage.getItem("fname");
	lname=sessionStorage.getItem("lname");
	email=sessionStorage.getItem("email");
	phone=sessionStorage.getItem("phone");
	userid=sessionStorage.getItem("userid");
dev=document.getElementById("dev").innerHTML;
sem=document.getElementById("sem").innerHTML;
col=document.getElementById("col").innerHTML;
details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone;    

l=0;
res={}
ss=new XMLHttpRequest
ss.open("GET","resultapi.php?sem="+sem+"&dev="+dev+"&col="+col,true)
ss.onload=function(){
res=JSON.parse(this.responseText)

console.log(res['data'][1]);
l=res['data'].length;


div=document.getElementById("div1")
if(l>=1){
    div.innerHTML=""
}
table=document.createElement('table')
table.id="tab";
table.border="1";

i=0;

row=document.createElement('tr')
td=document.createElement('td')

td1=document.createElement('td')
text1=document.createTextNode("Name")
td1.appendChild(text1)

td3=document.createElement('td')
text3=document.createTextNode("Enrollment No.")
td3.appendChild(text3)

td4=document.createElement('td')
text4=document.createTextNode("Marks")
td4.appendChild(text4)

row.appendChild(td1)
row.appendChild(td3)
row.appendChild(td4)
table.appendChild(row)
div.appendChild(table)


for(i=0;i<res['data'].length;i++){

row=document.createElement('tr')
td=document.createElement('td')

td1=document.createElement('td')
text1=document.createTextNode(res['data'][i]['fname']+" "+res['data'][i]['lname'])
td1.appendChild(text1)

td3=document.createElement('td')
text3=document.createTextNode(res['data'][i]['uid'])
td3.appendChild(text3)
mmarks=res['data'][i]['marks']

if(mmarks=='-1'){
    mmarks=0;
}else if(mmarks==-1){
    mmarks=0
}

td4=document.createElement('td')
text4=document.createTextNode(mmarks)
td4.appendChild(text4)

row.appendChild(td1)
row.appendChild(td3)
row.appendChild(td4)
table.appendChild(row)
div.appendChild(table)
table.appendChild(row)
div.appendChild(table)
}

}
ss.send()

