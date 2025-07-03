import Trix from 'trix';

window.Trix = Trix;

export default Trix;


let textEditor = document.querySelector('#text-editor')

textEditor.classList.add('h-[300px]')
textEditor.classList.add('overflow-scroll')