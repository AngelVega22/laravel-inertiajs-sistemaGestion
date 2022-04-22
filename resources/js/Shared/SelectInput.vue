<template>
  <div :class="$attrs.class">
    <!-- <label v-if="label" class="form-label" :for="id">{{ label }}:</label> -->
    <select
      :id="id"
      ref="input"
      v-model="selected"
      v-bind="{ ...$attrs, class: null }"
      class="
        py-2
        px-3
        rounded-lg
        border-2 border-purple-300
        mt-1
          w-full 
        focus:outline-none
        focus:ring-2
        focus:ring-purple-600
        focus:border-transparent
      "
      
      :class="{ error: error }"
    >
      <slot />
    </select>
    <div v-if="error" class="form-error">{{ error }}</div>
  </div>
</template>

<script>
import { v4 as uuid } from "uuid";
export default {
  inheritAttrs: false,
  props: {
    id: {
      type: String,
      default() {
        return `select-input-${uuid()}`;
      },
    },
    error: String,
    label: String,
    modelValue: [String, Number, Boolean],
  },
  emits: ["update:modelValue"],
  data() {
    return {
      selected: this.modelValue,
    };
  },
  watch: {
    selected(selected) {
      this.$emit("update:modelValue", selected);
    },
  },
  methods: {
    focus() {
      this.$refs.input.focus();
    },
    select() {
      this.$refs.input.select();
    },
  },
};
</script>