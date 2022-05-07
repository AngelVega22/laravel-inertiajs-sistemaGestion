<template>
  <app-layout>
    <template #header>
      <h1 class="font-semibold text-xl text-gray-800 leading-tight">Activos</h1>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <Link
            :href="route('activos.create')"
            class="
              flex-shrink-0
              bg-blue-500
              text-white text-vase
              font-semibold
              py-2
              px-4
              rounded-lg
              shadow-md
              hover:bg-blue-700
            "
            type="button"
          >
            Agregar
          </Link>
          <table
            class="
              rounded-t-lg
              mt-5
              min-w-full
              mx-auto
              bg-gray-800
              text-gray-100
            "
          >
            <thead>
              <tr class="text-left border-b border-gray-300">
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Codigo
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Modelo
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Cantidad
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Tipo
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Serie
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Direccion IP
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Area
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Piso
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Estado
                </th>
                <th
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  Acciones
                </th>
              </tr>
            </thead>
            <tbody class="bg-gray-700 bordr-b border-gray-600 text-gray-200">
              <tr v-for="activo in activos" :key="activo.id_activo">
                <div class="flex items-center">
                  <div class="ml-4">
                    <td class="text-sm font-medium">
                      {{ activo.codigo_activo }}
                    </td>
                  </div>
                </div>

                <td
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-left text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  {{ activo.modelo_equipo }}
                </td>

                <td
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  {{ activo.cantidad_activo }}
                </td>

                <td
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  {{ activo.tipo_activo }}
                </td>
                <td
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  {{ activo.serie_activo }}
                </td>
                <td
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  {{ activo.direccion_ip }}
                </td>
                <td
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  {{ activo.area }}
                </td>
                <td
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                  {{ activo.piso }}
                </td>
                <td
                  scope="col"
                  class="
                    px-6
                    py-3
                    text-center text-xs
                    font-medium
                    text-gray-100
                    uppercase
                    tracking-wider
                  "
                >
                <div v-if="activo.estado_activo > 0">Asignado</div>
                <div v-else>No asignado</div>
                </td>

                <td class="flex justify-center m-2">
                  <Link
                    :href="route('activos.edit', activo.id_activo)"
                    class="
                      ml-2
                      flex-shrink-0
                      bg-blue-500
                      text-white text-vase
                      font-semibold
                      py-2
                      px-4
                      rounded-lg
                      shadow-md
                      hover:bg-blue-700
                    "
                    type="button"
                  >
                    Editar</Link
                  >
                  <Link
                    method="DELETE"
                    :href="route('activos.destroy', activo.id_activo)"
                    class="
                      ml-2
                      flex-shrink-0
                      bg-blue-500
                      text-white text-vase
                      font-semibold
                      py-2
                      px-4
                      rounded-lg
                      shadow-md
                      hover:bg-blue-700
                    "
                    as="button"
                    type="button"
                  >
                    Eliminar</Link
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: {
    activos: Object,
  },
  components: {
    AppLayout,
    Link,
  },
};
</script>




    


<style>
</style>