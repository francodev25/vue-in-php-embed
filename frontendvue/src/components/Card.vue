<template>
  <div class="card">
    <div class="card__header">
      <div class="card__header-heading">
        <div class="card_icon">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-broadcast-pin"
            viewBox="0 0 16 16"
          >
            <path
              d="M3.05 3.05a7 7 0 0 0 0 9.9.5.5 0 0 1-.707.707 8 8 0 0 1 0-11.314.5.5 0 0 1 .707.707zm2.122 2.122a4 4 0 0 0 0 5.656.5.5 0 1 1-.708.708 5 5 0 0 1 0-7.072.5.5 0 0 1 .708.708zm5.656-.708a.5.5 0 0 1 .708 0 5 5 0 0 1 0 7.072.5.5 0 1 1-.708-.708 4 4 0 0 0 0-5.656.5.5 0 0 1 0-.708zm2.122-2.12a.5.5 0 0 1 .707 0 8 8 0 0 1 0 11.313.5.5 0 0 1-.707-.707 7 7 0 0 0 0-9.9.5.5 0 0 1 0-.707zM6 8a2 2 0 1 1 2.5 1.937V15.5a.5.5 0 0 1-1 0V9.937A2 2 0 0 1 6 8z"
            />
          </svg>
        </div>
        <h2>Amplificador Teleste</h2>
      </div>
      <div class="card__header-meta-tec">
        <h3><span>#idAmplificador: </span> 711</h3>
        <h3><span>#idEdificio: </span> 26385</h3>
      </div>
      <div class="card__header-meta">
        <h3>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-border-width"
            viewBox="0 0 16 16"
          >
            <path
              d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"
            /></svg
          ><span>Nombre: </span> SJ49BA - 26385 - 1
        </h3>
        <h3>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-geo-alt-fill"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
            />
          </svg>
          <span>Dirección: </span> HIPOLITO YRIGOYEN 3372 , ALMAGRO , CDAD DE
          BUENOS AIRES
        </h3>
      </div>
      <div class="card__header-timestamp">
        Última Monitoria : 12-05-25 14:55HS
      </div>
    </div>
    <div class="card__body">
      <div class="card__section" id="left-section">
        <h4 class="card__section-heading">Salida Directa</h4>
        <h5 class="card__section-subHeading">Niveles Actuales</h5>
        <p><span>Low Fec :</span>123</p>
        <p><span>levelLowFec :</span>27.51</p>
        <p><span>highFec:</span></p>
        <p><span>Low Fec :</span></p>
        <p><span>Low Fec :</span></p>
        <h5 class="card__section-subHeading">Niveles Diseño</h5>
        <p><span>Low Fec :</span>123</p>
        <p><span>levelLowFec :</span>27.51</p>
        <p><span>highFec:</span></p>
        <p><span>Low Fec :</span></p>
        <p><span>Low Fec :</span></p>
        <h5 class="card__section-subHeading">Diferencia</h5>
        <p><span>nivel_ds_ch3 :</span>123</p>
        <p><span>nivel_ds_ch116:</span>27.51</p>
        <h5 class="card__section-subHeading">Fw</h5>
        <p><span>input_gain :</span>123</p>
        <p><span>input_eq:</span>27.51</p>
      </div>
      <div class="card__section">
        <h4 class="card__section-heading">Salida Retorno</h4>
        <h5 class="card__section-subHeading">US</h5>
        <p><span>Low Fec :</span>123</p>
        <p><span>levelLowFec :</span>27.51</p>
        <p><span>highFec:</span></p>
        <p><span>Low Fec :</span></p>
        <h5 class="card__section-subHeading">Umbral</h5>
        <p><span>Low Fec :</span></p>
        <p><span>Low Fec :</span></p>
        <h4 class="card__section-heading">Transponder</h4>
        <h5 class="card__section-subHeading">RX</h5>
        <p><span>Low Fec :</span>123</p>
        <p><span>levelLowFec :</span>27.51</p>
        <h5 class="card__section-subHeading">TX</h5>
        <p><span>Low Fec :</span>123</p>
        <p><span>levelLowFec :</span>27.51</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Card",
  data() {
    return {};
  },
  created() {},
  methods: {},
};
</script>

<style scoped>
.card {
  height: auto;
  width: 32rem;
  border: 1px solid red;
  padding: 1rem;
}
.card__header {
  margin-bottom: 1rem;
}

.card__header-heading {
  display: flex;
}
.card__header-heading h2 {
  margin: 0;
}

.card__header-meta,
.card__header-meta-tec {
  display: flex;
  flex-direction: column;
}
.card__header-meta h3,
.card__header-meta-tec h3 {
  margin: 0;
}
.card__header-meta-tec {
  color: rgb(99, 99, 99);
  font-weight: 300;
}

.card__body {
  display: grid;
  grid-template-columns: 50% 50%;
}

.card__section {
  padding: 12px;
}

#left-section {
  border-right: thin solid rgb(221, 221, 221);
}
</style>
