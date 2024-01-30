var d=Object.defineProperty;var l=(s,e,t)=>e in s?d(s,e,{enumerable:!0,configurable:!0,writable:!0,value:t}):s[e]=t;var n=(s,e,t)=>(l(s,typeof e!="symbol"?e+"":e,t),t);(function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const o of document.querySelectorAll('link[rel="modulepreload"]'))i(o);new MutationObserver(o=>{for(const r of o)if(r.type==="childList")for(const a of r.addedNodes)a.tagName==="LINK"&&a.rel==="modulepreload"&&i(a)}).observe(document,{childList:!0,subtree:!0});function t(o){const r={};return o.integrity&&(r.integrity=o.integrity),o.referrerPolicy&&(r.referrerPolicy=o.referrerPolicy),o.crossOrigin==="use-credentials"?r.credentials="include":o.crossOrigin==="anonymous"?r.credentials="omit":r.credentials="same-origin",r}function i(o){if(o.ep)return;o.ep=!0;const r=t(o);fetch(o.href,r)}})();const c=`
    .widget__container * {
        box-sizing: border-box;
    }        
    h3, p, input {
        margin: 0;
        padding: 0;
    }
    .widget__container {
        box-shadow: 0 0 18px 8px rgba(0, 0, 0, 0.1), 0 0 32px 32px rgba(0, 0, 0, 0.08);
        width: 400px;
        overflow: auto;
        right: -25px;
        bottom: 75px;
        position: absolute;
        transition: max-height .2s ease;
        font-family: Helvetica, Arial ,sans-serif;
        background-color: #e6e6e6a6;
        border-radius: 10px;
        box-sizing: border-box;
    }
    .widget__icon {
        cursor: pointer;
        width: 60%;
        position: absolute;
        top: 18px;
        left: 16px;
        transition: transform .3s ease;
    }
    .widget__hidden {
        transform: scale(0);
    }
    .button__container {
        border: none;
        background-color: #0f172a;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        cursor: pointer;
    }
    .widget__container.hidden {
        max-height: 0px;
    }
    .widget__header {
        padding: 1rem 2rem 1.5rem;
        background-color: #000;
        color: #fff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        text-align: center;
    }
    .widget__header h3 {
        font-size: 24px;
        font-weight: 400;
        margin-bottom: 8px;
    }
    form {
        padding: 2rem 1rem 1.5rem;
    }
    form .form__field {
        margin-bottom: 1.5rem;
        display: flex;
        flex-direction: column;
    }
    .form__field label {
        margin-bottom: 8px;
        font-size: 14px;
    }
    .form__field input,
    .form__field textarea {
        border: 1px solid #000000ad;
        border-radius: 3px;
        padding: 8px 10px;
        background-color: #fff;
    }
    .form__field input {
        height: 48px;
    }
    .form__field textarea::placeholder {
        font-family: Helvetica, Arial ,sans-serif;
    }
    form button {
        height: 48px;
        border-radius: 6px;
        font-size: 18px;
        background-color: #000;
        color: #fff;
        border: 0;
        width: 100%;
        cursor: pointer;
    }
    form button:hover {
        background-color: rgba(0, 0, 0, 95%);
    }
    
    /* Chat containers */
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}

.widget__messages_box {
    margin: 0px 15px;
    height: 400px;
    overflow-y: scroll;
}
`,h=`
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
        <polyline points="22,6 12,13 2,6"></polyline>
    </svg>
`,g=`
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="#FFFFFF" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
`;class p{constructor(e="bottom-right"){n(this,"position","");n(this,"open",!1);n(this,"widgetContainer",null);n(this,"chatBox",null);n(this,"messagesHistory",[]);n(this,"identifierToken","");n(this,"url","http://127.0.0.1:8080/api/chat");this.position=this.getPosition(e),this.open=!1,this.initialize(),this.injectStyles()}getPosition(e){const[t,i]=e.split("-");return{[t]:"30px",[i]:"30px"}}async initialize(){const e=document.createElement("div");e.style.position="fixed",Object.keys(this.position).forEach(r=>e.style[r]=this.position[r]),document.body.appendChild(e);const t=document.createElement("button");t.classList.add("button__container");const i=document.createElement("span");i.innerHTML=h,i.classList.add("widget__icon"),this.widgetIcon=i;const o=document.createElement("span");o.innerHTML=g,o.classList.add("widget__icon","widget__hidden"),this.closeIcon=o,t.appendChild(this.widgetIcon),t.appendChild(this.closeIcon),this.widgetContainer=document.createElement("div"),this.widgetContainer.classList.add("widget__hidden","widget__container"),this.createWidgetContent(),e.appendChild(this.widgetContainer),e.appendChild(t),t.addEventListener("click",this.toggleOpen.bind(this)),this.chatBox=document.getElementById("widget__messages_box"),this.scrollToBottom()}createWidgetContent(){this.widgetContainer.innerHTML=`
        <header class="widget__header">
            <h3>Chat with our AI Helper</h3>
            <p>He will try to help you pick a car you want</p>
        </header>
        
        <div class="widget__messages_box" id="widget__messages_box">
            <div class="container">
                <span>AI</span>
                <p>Hello, how can I help you?</p>
            </div>
        </div>
        
        <form>
            <div class="form__field">
                <label for="widget__message">Message</label>
                <textarea
                  id="widget__message"
                  name="message"
                  placeholder="Enter your message"
                  rows="6"
                ></textarea>
            </div>
            <button onclick="return chatWidget.sendMessage();">Send Message</button>
        </form>
    `}injectStyles(){const e=document.createElement("style");e.innerHTML=c.replace(/^\s+|\n/gm,""),document.head.appendChild(e)}toggleOpen(){this.open=!this.open,this.open?(this.widgetIcon.classList.add("widget__hidden"),this.closeIcon.classList.remove("widget__hidden"),this.widgetContainer.classList.remove("widget__hidden"),this.scrollToBottom()):(this.widgetIcon.classList.remove("widget__hidden"),this.closeIcon.classList.add("widget__hidden"),this.widgetContainer.classList.add("widget__hidden"))}messageTemplate(){return`<div class="container">
<span>##USER##</span>
<p>##MESSAGE##</p>
</div>`}retrieveIdentifier(){return this.identifierToken=Date.now().toString(36)+Math.random().toString(36).substring(2),localStorage.setItem("widget__identifier",this.identifierToken),this.identifierToken}addMessage(e,t){this.messagesHistory.push({message:e,sender:t});let i=this.messageTemplate();i=i.replace("##USER##",t),i=i.replace("##MESSAGE##",e),this.chatBox.innerHTML+=i}sendMessage(){let e=document.getElementById("widget__message"),t=e.value;return this.addMessage(t,"You"),this.requestResponse(t).then(i=>{this.addMessage(i.data.answer,"AI"),e.value="",this.scrollToBottom()}),!1}async requestResponse(e){const i=await(await fetch(this.url,{method:"POST",body:JSON.stringify({query:e,identifier:this.retrieveIdentifier()}),headers:{"Content-type":"application/json; charset=UTF-8"}})).json();if(i.data.answer==null)return this.requestResponse(e);if(i.data.answer)return i}scrollToBottom(){this.chatBox.scrollTop=this.chatBox.scrollHeight}}function m(){return new p}window.chatWidget=m();
