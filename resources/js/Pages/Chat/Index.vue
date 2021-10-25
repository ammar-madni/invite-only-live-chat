<template>
    <app-layout title="Chats">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Chats
            </h2>
        </template>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12 space-y-12">
            <new-chat-form />
            <div v-if="chats.length > 0" class="space-y-4">
                <h2
                    class="
                        font-semibold
                        text-xl text-gray-800
                        leading-tight
                        px-6
                        sm:px-0
                    "
                >
                    My Chats
                </h2>
                <div v-for="(chat, index) in chats" :key="index">
                    <chat-item :chat="chat" />
                </div>
            </div>
            <!-- <div v-if="saved_chats.length > 0" class="space-y-4">
                <h2
                    class="
                        font-semibold
                        text-xl text-gray-800
                        leading-tight
                    "
                >
                    Saved Chats
                </h2>
                <div v-for="(chat, index) in chats" :key="index">
                    <chat-item :chat="chat" />  
                </div>
            </div> -->
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
