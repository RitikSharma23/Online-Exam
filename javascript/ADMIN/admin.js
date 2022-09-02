var data=[[]];
var obj=1;
fname="";
lname="";
email="";
phone="";
var details="";
    
document.getElementById("submit").addEventListener("click",()=>{

num=document.getElementById("number").value;
ph=document.getElementById("password").value;

ss=new XMLHttpRequest
ss.open("GET","../api/login.php?number="+num+"&password="+ph+"&obj=1",true)
ss.onload=function(){
res=JSON.parse(this.responseText)
fname=res['data'][0].fname;
lname=res['data'][0].lname;
email=res['data'][0].email;
phone=res['data'][0].phone;
pass=res['data'][0].pass;   


document.getElementById("fname").innerHTML=fname;
document.getElementById("lname").innerHTML=lname;
document.getElementById("email").innerHTML=email;
document.getElementById("phone").innerHTML=phone; 


details="fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&obj="+obj;    

}
ss.send()


})


document.getElementById("panel").addEventListener("click",()=>{
    window.location.href="panel.php?"+details;

})


document.getElementById("create").addEventListener("click",()=>{
window.location.href = "sem.php?"+details; 

})

