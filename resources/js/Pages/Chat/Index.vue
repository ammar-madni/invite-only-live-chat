<template>
  <app-layout title="Chats">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Chats</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-12">
        <new-chat-form />
        <div class="space-y-4">
          <h2 v-if="chats.count > 0" class="font-semibold text-xl text-gray-800 leading-tight">
            My Chats
          </h2>
          <div v-for="(chat, index) in chats" :key="index">
            <chat-item :chat="chat" />
          </div>
        </div>
        <div class="space-y-4">
          <h2 v-if="saved_chats > 0" class="font-semibold text-xl text-gray-800 leading-tight">
            Saved Chats
          </h2>
          <!-- <div v-for="(chat, index) in chats" :key="index">
              <chat-item :chat="chat" />
            </div> -->
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import ChatItem from "@/Pages/Chat/ChatItem.vue";
import NewChatForm from "@/Pages/Chat/NewChatForm.vue";

export default defineComponent({
  props: ["chats"],

  components: {
    AppLayout,
    ChatItem,
    NewChatForm,
  },
});
</script>
