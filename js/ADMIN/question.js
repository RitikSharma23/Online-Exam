
fname=sessionStorage.getItem("fname");
lname=sessionStorage.getItem("lname");
email=sessionStorage.getItem("email");
phone=sessionStorage.getItem("phone");
userid=sessionStorage.getItem("userid");
details="&fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&userid="+userid;  

    console.log(details)   
x=1;
phone=document.getElementById("phone").innerHTML;
document.getElementById("div1").innerHTML=""

document.getElementById("add").addEventListener("click",()=>{
    var field=document.createElement("fieldset")
    var legend=document.createElement("legend")
    var text=document.createTextNode("Question "+x)
    legend.appendChild(text)
    field.appendChild(legend)

    var input = document.createElement("input");
    input.type = "text";
    input.id="input"+x
    input.placeholder="Question "+x
    input.name = "member";

    var A=document.createElement("span")
    A.appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0(A). "))
    var IA=document.createElement("input");
    IA.type = "text";
    IA.id="optiona"+x
    IA.placeholder="Option A "
    IA.name = "member";

    var B=document.createElement("span")
    B.appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0(B). "))
    var IB=document.createElement("input");
    IB.type = "text";
    IB.id="optionb"+x
    IB.placeholder="Option B "
    IB.name = "member";

    var C=document.createElement("span")
    C.appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0(C). "))
    var IC=document.createElement("input");
    IC.type = "text";
    IC.id="optionc"+x
    IC.placeholder="Option C "
    IC.name = "member";

    var D=document.createElement("span")
    D.appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0(D). "))
    var ID=document.createElement("input");
    ID.type = "text";
    ID.id="optiond"+x
    ID.placeholder="Option D "
    ID.name = "member";

    var t=document.createElement("span").appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0Correct Option : "))
    var zz1=document.createElement("span").appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0 A:"))
    var ans1=document.createElement("input")
    ans1.type="radio"
    ans1.name="o"+x
    ans1.value="a"

    var zz2=document.createElement("span").appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0 B:"))
    var ans2=document.createElement("input")
    ans2.type="radio"
    ans2.name="o"+x
    ans2.value="b"

    var zz3=document.createElement("span").appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0 C:"))
    var ans3=document.createElement("input")
    ans3.type="radio"
    ans3.name="o"+x
    ans3.value="c"

    var zz4=document.createElement("span").appendChild(document.createTextNode("\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0\u00A0 D:"))
    var ans4=document.createElement("input")
    ans4.type="radio"
    ans4.name="o"+x
    ans4.value="d"

    field.appendChild(input)
    field.appendChild(document.createElement("br"))
    field.appendChild(document.createElement("br"))
    field.appendChild(A)
    field.appendChild(IA)
    field.appendChild(B)
    field.appendChild(IB)
    field.appendChild(document.createElement("br"))
    field.appendChild(document.createElement("br"))
    field.appendChild(C)
    field.appendChild(IC)
    field.appendChild(D)
    field.appendChild(ID)
    field.appendChild(document.createElement("br"))
    field.appendChild(document.createElement("br"))
    field.appendChild(t)
    field.appendChild(zz1)
    field.appendChild(ans1)
    field.appendChild(zz2)
    field.appendChild(ans2)
    field.appendChild(zz3)
    field.appendChild(ans3)
    field.appendChild(zz4)
    field.appendChild(ans4)

    var div=document.createElement("div")
    div.id="d1"
    div.style="border:solid;padding-bottom:10px;font-size:15px;border-radius:10px"
    div.appendChild(field)

    const element = document.getElementById("div1");
    element.appendChild(div);
    element.appendChild(document.createElement("br"));

    x=x+1;
})

sub="";
sem=0;
unit=0;
dev="";


document.getElementById("sub").addEventListener("click",()=>{
    dd = document.getElementById("div1").innerHTML;
    flag=0;

    if(dd==""){
        alert("Please Create any Question \n or Upload Excel File Below")
    }else{

        function pad(d){return (d < 10) ? '0' + d.toString() : d.toString();}
        y=new Date;
        id=pad(y.getMinutes())+pad(y.getDate())+pad(y.getMonth())+pad(y.getSeconds());
        
        for(i=1;i<x;i++){

            q1=(document.getElementById("input"+i).value)
            o1=(document.getElementById("optiona"+i).value)
            o2=(document.getElementById("optionb"+i).value)
            o3=(document.getElementById("optionc"+i).value)
            o4=(document.getElementById("optiond"+i).value)

            if(document.getElementById("input"+i).value==""){
                flag=1;
                alert("Please Enter Question No : "+(i))
                document.getElementById("input"+i).focus();
                break;
            }else if(document.getElementById("optiona"+i).value==""){
                flag=1;
                alert("Please Enter Option No : "+(i))
                document.getElementById("optiona"+i).focus();
                break;
            }else if(document.getElementById("optionb"+i).value==""){
                flag=1;
                alert("Please Enter Option No : "+(i))
                document.getElementById("optionb"+i).focus();
                break;
            }else if(document.getElementById("optionc"+i).value==""){
                flag=1;
                alert("Please Enter Option No : "+(i))
                document.getElementById("optionc"+i).focus();
                break;
            }else if(document.getElementById("optiond"+i).value==""){
                flag=1;
                alert("Please Enter Option No : "+(i))
                document.getElementById("optiond"+i).focus();
                break;
            }
        }

        if(flag==0){
        
        for(i=1;i<x;i++){

        q1=(document.getElementById("input"+i).value)
        o1=(document.getElementById("optiona"+i).value)
        o2=(document.getElementById("optionb"+i).value)
        o3=(document.getElementById("optionc"+i).value)
        o4=(document.getElementById("optiond"+i).value)

        

                for (const radioButton of document.querySelectorAll('input[name="o'+i+'"]')) {
                    if (radioButton.checked) {
                        selectedSize = radioButton.value;
                        break;
                    }
                }
        
                nam=document.getElementById("fname").innerHTML;
                sub=document.getElementById("subject").innerHTML;
                sem=document.getElementById("sem").innerHTML;
                unit=document.getElementById("unit").innerHTML;
                dev=document.getElementById("dev").innerHTML;
                no=i-1
            ss=new XMLHttpRequest
            ss.open("GET","../api/question.php?dev="+dev+"&quid="+nam+"&id="+id+"&no="+no.toString()+"&sem="+sem+"&subject="+sub+"&unit="+unit+"&question="+q1+"&a="+o1+"&b="+o2+"&c="+o3+"&d="+o4+"&correct="+selectedSize+"&obj=1",true)
            ss.onload=function(){
                res=this.responseText
            }
            ss.send()
        }

        tot=x-1
        
            ss=new XMLHttpRequest
            ss.open("GET","../api/question.php?dev="+dev+"&quid="+phone+"&id="+id+"&sem="+sem+"&subject="+sub+"&unit="+unit+"&total="+tot+"&obj=2",true)
            ss.onload=function(){
            res=this.responseText
            }
            ss.send()
            location.href = "panel.php?"+details+"&obj=1"; 
        }
        
    }
})




