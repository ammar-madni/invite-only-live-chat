<template>
  <div class="bg-gray-100 p-4 rounded shadow-sm space-y-3">
    <div class="flex justify-between">
      <p class="font-bold text-sm text-gray-800">{{ message.user.name }}</p>
      <p class="font-bold text-sm text-gray-800">{{ message.created_at }}</p>
    </div>
    <p class="font-light text-lg text-gray-600">{{ message.body }}</p>
  </div>
</template>

<script>
export default {
  props: ["message"],
};
</script>