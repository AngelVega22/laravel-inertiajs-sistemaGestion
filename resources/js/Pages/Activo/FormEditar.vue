<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar Activo
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
                  placeholder="codigo_activo"
                />
              </div>
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Modelo </label
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
                  placeholder="Piso"
                />
              </div>
            </div>
            <div
              class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8 mt-5 mx-7"
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
                  placeholder="Oficina"
                />
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
              </div>
               <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Ubicacion</label
                >
                     <select-input v-model="form.ubicacion_id" label="ubicacion">
                  <option
                    v-for="ubicacion in ubicaciones"
                    :key="ubicacion.id"
                    :value="ubicacion.id"
                  >
                    {{ ubicacion.area }}
                  </option> 
                </select-input>           
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
                  >Serie</label
                >
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
                  placeholder="serie_activo"
                />
              </div>
              <div class="grid grid-cols-1">
                <label
                  class="
                    uppercase
                    md:text-sm
                    text-xs text-gray-500 text-light
                    font-semibold
                  "
                  >Tipo </label
                >
                <input
                  id="tipo_equipo"
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
                />
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
import AppLayout from "@/Layouts/AppLayout";
import { Link } from "@inertiajs/inertia-vue3";
import SelectInput from '@/Shared/SelectInput'

export default {
  components: {
    AppLayout, SelectInput,
    Link,
  },
  props: { activo :Object   ,  ubicaciones: Array},
  



  data() {
    return {
      form: {
        codigo_activo: this.$props.activo.codigo_activo,
        modelo_equipo: this.$props.activo.modelo_equipo,
        cantidad_activo: this.$props.activo.cantidad_activo,
        direccion_ip: this.$props.activo.direccion_ip,
        ubicacion_id: this.$props.activo.ubicacion_id,
        tipo_activo: this.$props.activo.tipo_activo,
        serie_activo: this.$props.activo.serie_activo,
        specs:this.$props.activo.specs
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.put(
        route("activos.update", this.$props.activo.id_activo),
        this.form
      );
    },
  },
};
</script>