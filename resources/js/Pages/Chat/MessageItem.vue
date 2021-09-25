<template>
  <div class="bg-gray-100 p-4 rounded shadow-sm space-y-3">
    <div class="flex justify-between">
      <p class="font-bold text-sm text-gray-800">{{ message.user.name }}</p>
      <p class="text-sm text-gray-800">{{ `${timeSinceMessageWasSent} ago` }}</p>
    </div>
    <p class="font-light text-lg text-gray-600">{{ message.body }}</p>
  </div>
</template>

<script>
import { formatDistanceToNow } from 'date-fns'

export default {
  props: ["message"],

  computed: {
    timeSinceMessageWasSent: function () {
        return formatDistanceToNow(
            new Date(this.message.created_at),
            {includeSeconds: true}
        )
    },
  },
};
</script>