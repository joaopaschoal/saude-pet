import './bootstrap'; // script de inicialização (não é o bootstrap da biblioteca frontend)
import 'bootstrap'; // este sim é o bootstrap da biblioteca frontend
import $ from 'jquery';
import toastr from 'toastr';
import 'toastr/build/toastr.min.css';

window.$ = $;
window.toastr = toastr;
