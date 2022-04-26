<template>

 
     <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Agregar ubicación</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                <form @submit.prevent="submit" class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Area</label>
                    <input 
                    id="area"
                    v-model="form.area"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Area" 
                    />
                        <div
                  v-if="errors.area"
                  v-text="errors.area"
                  class="text-red-500 text-xs mt-1"
                ></div>
                </div>
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Piso</label>
                    <input         
                        id="piso"
                        v-model="form.piso"                
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Piso" 
                    />
                        <div
                  v-if="errors.piso"
                  v-text="errors.piso"
                  class="text-red-500 text-xs mt-1"
                ></div>
                </div>
                </div>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                
                <div class="grid grid-cols-1">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Oficina</label>
                    <input 
                    id="oficina"
                    v-model="form.oficina"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Oficina" 
                    />
                        <div
                  v-if="errors.oficina"
                  v-text="errors.oficina"
                  class="text-red-500 text-xs mt-1"
                ></div>
                </div>
                
   
                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <Link
                    :href="route('ubicaciones.index')"                    
                    class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' as="button" type="button">
                    Cancelar
                </Link> 
                <button 
                    type="submit"
                    class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'
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

export default {
  components: {
    AppLayout, Link
  },
  props: {
    errors: Object,
  },
  data() {
    return {
      form: {
          area:null,
          piso:null,
          oficina:null,

      },
    };
  },
  methods:{
      submit(){
          this.$inertia.post(route('ubicaciones.store'),this.form)
      }
  }
};
</script>

<style>
</style>