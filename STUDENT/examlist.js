roll=document.getElementById("roll").innerHTML
fname=document.getElementById("fname").innerHTML
lname=document.getElementById("lname").innerHTML
uid=document.getElementById("uid").innerHTML
sem=document.getElementById("sem").innerHTML
email=document.getElementById("email").innerHTML
phone=document.getElementById("phone").innerHTML
dev=document.getElementById("dev").innerHTML
id=document.getElementById("id").innerHTML
subcol=document.getElementById("subcol").innerHTML

data="?roll="+roll+"&fname="+fname+"&lname="+lname+"&phone="+phone+"&email="+email+"&sem="+sem+"&uid="+uid+"&dev="+dev;

console.log(data)

que=[[]]
res={}
ss=new XMLHttpRequest
ss.open("GET","loadexam.php"+data+"&id="+id,true)
ss.onload=function(){
res=JSON.parse(this.responseText)

que=(res['data'])



function shuffle(array) {
    let currentIndex = array.length,  randomIndex;
  
    while (currentIndex != 0) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
  
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }
  
    return array;
  }

shuffle(res['data'])




// for(x=0;x<que.length;x++){
  x=0;
var field=document.createElement("fieldset")
var legend=document.createElement("legend")
var text=document.createTextNode("Question "+(x+1))
legend.appendChild(text)
field.appendChild(legend)

var input = document.createElement("input");
input.type = "text";
input.id="input"+x
input.defaultValue=res['data'][x]['question']
input.name = "member";
input.readOnly=true
input.style="border:none;outline:none"


var zz1=document.createElement("span").appendChild(document.createTextNode(res['data'][x]['a']))
var ans1=document.createElement("input")
ans1.type="radio"
ans1.name="o"+x
ans1.value="a"

var zz2=document.createElement("span").appendChild(document.createTextNode(res['data'][x]['b']))
var ans2=document.createElement("input")
ans2.type="radio"
ans2.name="o"+x
ans2.value="b"

var zz3=document.createElement("span").appendChild(document.createTextNode(res['data'][x]['c']))
var ans3=document.createElement("input")
ans3.type="radio"
ans3.name="o"+x
ans3.value="c"

var zz4=document.createElement("span").appendChild(document.createTextNode(res['data'][x]['d']))
var ans4=document.createElement("input")
ans4.type="radio"
ans4.name="o"+x
ans4.value="d"


field.appendChild(input)
field.appendChild(document.createElement("br"))
field.appendChild(document.createElement("br"))
field.appendChild(ans1)
field.appendChild(zz1)
field.appendChild(document.createElement("br"))
field.appendChild(document.createElement("br"))
field.appendChild(ans2)
field.appendChild(zz2)
field.appendChild(document.createElement("br"))
field.appendChild(document.createElement("br"))
field.appendChild(ans3)
field.appendChild(zz3)
field.appendChild(document.createElement("br"))
field.appendChild(document.createElement("br"))
field.appendChild(ans4)
field.appendChild(zz4)

var div=document.createElement("div")
div.id="d1"
div.style="border:solid;"
div.appendChild(field)

const element = document.getElementById("div1");
element.appendChild(div);
element.appendChild(document.createElement("br"));

// }

}
ss.send()


document.getElementById("submit").addEventListener("click",()=>{
correct=[]
  
    var el = document.getElementsByTagName('input');
      
    for(i = 0; i < el.length; i++) {
          
        if(el[i].type=="radio") {
          
            if(el[i].checked)

                    correct.push(el[i].value)
        }
    }


marks=0;

for(x=0;x<que.length;x++){
if(correct[x]==res['data'][x]['correct']){
marks++;
}
}

console.log(marks)
console.log(data)

window.location.href = "marks.php"+data+"&id="+id+"&marks="+marks+"&subcol="+subcol;

})
