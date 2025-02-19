import { resaltaSiEstasEn } from "../lib/js/resaltaSiEstasEn.js";

export class NavTabFixed extends HTMLElement {
  connectedCallback() {
    this.classList.add("md-tab", "fixed");

    this.innerHTML = /* HTML */ `
      <a ${resaltaSiEstasEn(["/index.html"])} href="index.html">
        <span class="material-symbols-outlined">newspaper</span>
        Formulario
      </a>

      <a ${resaltaSiEstasEn(["/renderCliente.html"])} href="renderCliente.html">
        <span class="material-symbols-outlined">devices</span>
        Cliente
      </a>

      <a ${resaltaSiEstasEn(["/renderServidor.html"])} href="renderServidor.html">
        <span class="material-symbols-outlined">dns</span>
        Servidor
      </a>

      <a ${resaltaSiEstasEn(["/ayuda.html"])} href="ayuda.html">
        <span class="material-symbols-outlined">help</span>
        Ayuda
      </a>
    `;
  }
}

customElements.define("nav-tab-fixed", NavTabFixed);
