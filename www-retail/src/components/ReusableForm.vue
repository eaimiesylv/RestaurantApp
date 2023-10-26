<!-- ReusableForm.vue -->

<template>
    
    
    <div v-for="(field, index) in props.fields" :key="index" class="spacing">
        <label class="form-label mt-3">{{ field.label }}</label>
        <!-- Check if the input type is 'textarea' -->
        <template v-if="field.type === 'textarea'">
          <textarea
            class="form-control"
            v-model="props.fields[index].value"
            :required="field.required"
            :placeholder="field.placeholder"
          ></textarea>
        </template>
        <!-- If not a textarea, assume it's an input -->
        <template v-else>
          <input
            :type="field.type"
            class="form-control"
            v-model="props.fields[index].value"
            :required="field.required"
            :placeholder="field.placeholder"
          />
        </template>
      </div>

     
    
  </template>
  
  <script setup>


      const props = defineProps(['fields']);


  </script>
  
 