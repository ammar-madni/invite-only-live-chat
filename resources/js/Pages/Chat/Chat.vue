<template>
  <app-layout title="Chat">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ chat.name }}
      </h2>
      <!-- <div class="flex">
        <p class="mt-2">Chat ID: <span ref="chatId" class="text-light text-gray-500">{{ chat.id }}</span></p>
      </div> -->
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4 h-[20rem]">
        <div
          class="
            bg-white
            h-[30rem]
            md:h-[40rem]
            sm:rounded-lg
            shadow-xl
            p-6
            w-full
            flex flex-col
          "
        >
          <div
            class="
              overflow-x-hidden overflow-y-scroll
              flex flex-col-reverse
              space-y-4 space-y-reverse
              flex-grow
            "
          >
            <div v-for="(message, index) in chat.message" :key="index">
              <message-item :message="message" />
            </div>
          </div>
          <new-message-form :chat="chat" />
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import AppLayout from '@/Layouts/AppLayout.vue';
import MessageItem from '@/Pages/Chat/MessageItem.vue';
import NewMessageForm from '@/Pages/Chat/NewMessageForm.vue';

export default defineComponent({
  props: ['chat'],

  components: {
    AppLayout,
    MessageItem,
    NewMessageForm,
  },

  mounted() {
    console.log(`chat.${this.chat.id}`);
    window.Echo.join(`chat.${this.chat.id}`)
      .here((users) => {
        console.log(users);
      })
      .joining((user) => {
        console.log(user.name + ' joined');
      })
      .leaving((user) => {
        console.log(user.name + ' left');
      })
      .listen('NewMessage', (e) => {
        console.log(e);
        Inertia.reload({ only: ['chat'] });
      });
  },
});
</script>
