/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'assets/js/particles.json', function() {
    console.log('callback - particles.js config loaded');
  });

function AboutClick(){
    let aPosition = document.getElementById('About').getBoundingClientRect().top;
    window.scrollBy({
        top: aPosition,
        behavior: 'smooth'
    });
}
function FeatureClick(){
    let fPosition = document.getElementById('Feature').getBoundingClientRect().top;
    window.scrollBy({
        top: fPosition,
        behavior: 'smooth'
    });
}
function BlogClick(){
    let bPosition = document.getElementById('Blog').getBoundingClientRect().top;
    window.scrollBy({
        top: bPosition,
        behavior: 'smooth'
    });
}
function ContactClick(){
    let cPosition = document.getElementById('Contact').getBoundingClientRect().top;
    window.scrollBy({
        top: cPosition,
        behavior: 'smooth'
    });
}

let About = document.getElementById('About-nav');
About.addEventListener('click', AboutClick);
let Feature = document.getElementById('Feature-nav');
Feature.addEventListener('click',FeatureClick);
let Blog = document.getElementById('Blog-nav');
Blog.addEventListener('click',BlogClick);
let Contact = document.getElementById('Contact-nav');
Contact.addEventListener('click',ContactClick);