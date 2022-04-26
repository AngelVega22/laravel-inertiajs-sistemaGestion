<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Agregar activo
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <form @submit.prevent="submit" class="mb-6">
            <div
              class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7"
            >
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Codigo</label
                >
                <input
                  id="codigo_activo"
                  v-model="form.codigo_activo"
                  class="
                    py-2
                    px-3
                    rounded-lg
                    border-2 border-purple-300
                    mt-1
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-600
                    focus:border-transparent
                  "
                  type="text"
                  placeholder="Codigo "
                />
                <div
                  v-if="errors.codigo_activo"
                  v-text="errors.codigo_activo"
                  class="text-red-500 text-xs mt-1"
                ></div>
              </div>

              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Modelo</label
                >
                <input
                  id="modelo_equipo"
                  v-model="form.modelo_equipo"
                  class="
                    py-2
                    px-3
                    rounded-lg
                    border-2 border-purple-300
                    mt-1
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-600
                    focus:border-transparent
                  "
                  type="text"
                  placeholder="Modelo"
                />
                    <div
                  v-if="errors.modelo_equipo"
                  v-text="errors.modelo_equipo"
                  class="text-red-500 text-xs mt-1"
                ></div>
              </div>
            </div>
            <div
              class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7"
            >
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Cantidad</label
                >
                <input
                  id="cantidad_activo"
                  v-model="form.cantidad_activo"
                  class="
                    py-2
                    px-3
                    rounded-lg
                    border-2 border-purple-300
                    mt-1
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-600
                    focus:border-transparent
                  "
                  type="text"
                  placeholder="Cantidad"
                />
                    <div
                  v-if="errors.cantidad_activo"
                  v-text="errors.cantidad_activo"
                  class="text-red-500 text-xs mt-1"
                ></div>
              </div>
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Direccion IP</label
                >
                <input
                  id="direccion_ip"
                  v-model="form.direccion_ip"
                  class="
                    py-2
                    px-3
                    rounded-lg
                    border-2 border-purple-300
                    mt-1
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-600
                    focus:border-transparent
                  "
                  type="text"
                  placeholder="Direccion IP"
                />
                    <div
                  v-if="errors.direccion_ip"
                  v-text="errors.direccion_ip"
                  class="text-red-500 text-xs mt-1"
                ></div>
              </div>
            </div>

            <div
              class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7"
            >
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Tipo</label
                >
                <!-- <input
                  id="tipo_activo"
                  v-model="form.tipo_activo"
                  class="
                    py-2
                    px-3
                    rounded-lg
                    border-2 border-purple-300
                    mt-1
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-600
                    focus:border-transparent
                  "
                  type="text"
                  placeholder="Tipo"
                /> -->
                <select-input v-model="form.tipo_activo" label="tipo">
                  <option value="PC">PC</option>
                  <option value="Laptop">Laptop</option>
                  <option value="Anexo">Anexo</option>
                  <option value="Celular">Celular</option>
                  <option value="Otro">Otro</option>
                </select-input>
                    <div
                  v-if="errors.tipo_activo"
                  v-text="errors.tipo_activo"
                  class="text-red-500 text-xs mt-1"
                ></div>
              </div>
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Area</label
                >
                <!-- <input
                  id="ubicacion_id"
                  v-model="form.ubicacion_id"
                  class="
                    py-2
                    px-3
                    rounded-lg
                    border-2 border-purple-300
                    mt-1
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-600
                    focus:border-transparent
                  "
                  type="text"
                  placeholder="Ubicación"
                /> -->
                <select-input v-model="form.ubicacion_id" label="ubicacion">
                  <option
                    v-for="ubicacion in ubicaciones"
                    :key="ubicacion.id"
                    :value="ubicacion.id"
                  >
                    {{ ubicacion.area }}
                  </option>
                </select-input>
                    <div
                  v-if="errors.ubicacion_id"
                  v-text="errors.ubicacion_id"
                  class="text-red-500 text-xs mt-1"
                ></div>
              </div>
            </div>
            <div
              class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7"
            >
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Serie
                </label>
                <input
                  id="serie_activo"
                  v-model="form.serie_activo"
                  class="
                    py-2
                    px-3
                    rounded-lg
                    border-2 border-purple-300
                    mt-1
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-600
                    focus:border-transparent
                  "
                  type="text"
                  placeholder="Serie"
                />
                    <div
                  v-if="errors.serie_activo"
                  v-text="errors.serie_activo"
                  class="text-red-500 text-xs mt-1"
                ></div>
              </div>
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Especificaciones
                </label>
                <input
                  id="specs"
                  v-model="form.specs"
                  class="
                    py-2
                    px-3
                    rounded-lg
                    border-2 border-purple-300
                    mt-1
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-600
                    focus:border-transparent
                  "
                  type="text"
                  placeholder="Especificaciones"
                />
                    <div
                  v-if="errors.specs"
                  v-text="errors.specs"
                  class="text-red-500 text-xs mt-1"
                ></div>
              </div>
            </div>
            <div class="flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5">
              <Link
                :href="route('activos.index')"
                class="
                  w-auto
                  bg-gray-500
                  hover:bg-gray-700
                  rounded-lg
                  shadow-xl
                  font-medium
                  text-white
                  px-4
                  py-2
                "
                as="button"
                type="button"
              >
                Cancelar
              </Link>
              <button
                type="submit"
                class="
                  w-auto
                  bg-purple-500
                  hover:bg-purple-700
                  rounded-lg
                  shadow-xl
                  font-medium
                  text-white
                  px-4
                  py-2
                "
              >
                Guardar
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import SelectInput from "@/Shared/SelectInput";

export default {
  components: {
    AppLayout,
    Link,
    SelectInput,
  },
  props: {
    errors: Object,
    ubicaciones: Array,
  },
  data() {
    return {
      form: {
        codigo_activo: null,
        modelo_equipo: null,
        cantidad_activo: null,
        direccion_ip: null,
        ubicacion_id: null,
        tipo_activo: null,
        serie_activo: null,
        specs: null,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.post(route("activos.store"), this.form);
    },
  },
};
</script>

<style>
</style>