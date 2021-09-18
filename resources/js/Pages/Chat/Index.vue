<template>
  <app-layout title="Chats">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Chats</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
        <div v-for="(chat, index) in chats" :key="index">
          <chat-item :chat="chat" />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import ChatItem from "@/Pages/Chat/ChatItem.vue";

export default defineComponent({
  props: ["chats"],

  components: {
    AppLayout,
    ChatItem,
  },
});
</script>
