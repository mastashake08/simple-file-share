<template>
    <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div
                class="relative flex flex-col items-center justify-center aspect-video overflow-hidden rounded-xl border border-dashed border-sidebar-border/70 dark:border-sidebar-border p-4"
                @dragover.prevent
                @drop="handleDrop"
            >
                <input
                    type="file"
                    class="absolute inset-0 opacity-0 cursor-pointer"
                    @change="handleFileChange"
                />
                <p class="text-center text-gray-500 dark:text-gray-400">
                    Drag and drop a file here, or click to select a file
                </p>
            </div>
            <button
                class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg"
                :disabled="!file || isUploading"
                @click="uploadFile"
            >
                {{ isUploading ? 'Uploading...' : 'Upload File' }}
            </button>
            <div v-if="uploadUrl" class="mt-4">
                <p>
                    File uploaded successfully! URL: 
                    <a
                        :href="uploadUrl"
                        target="_blank"
                        class="text-blue-500 underline"
                    >
                        {{ uploadUrl }}
                    </a>
                </p>
                <button
                    class="mt-2 px-4 py-2 bg-green-500 text-white rounded-lg"
                    @click="copyToClipboard"
                >
                    Copy URL to Clipboard
                </button>
            </div>
        </div>
</template>
<script setup lang="ts">
import axios from 'axios';
import { ref } from 'vue';
const file = ref<File | null>(null);
const uploadUrl = ref<string | null>(null);
const isUploading = ref(false);

const handleFileChange = (event: Event) => {
    const target = event.target as HTMLInputElement;
    if (target.files && target.files[0]) {
        file.value = target.files[0];
        uploadFile(); // Automatically upload after selecting a file
    }
};

const handleDrop = async (event: DragEvent) => {
    event.preventDefault();
    if (event.dataTransfer?.files && event.dataTransfer.files[0]) {
        file.value = event.dataTransfer.files[0];
        await uploadFile(); // Automatically upload after dropping a file
    }
};

const uploadFile = async () => {
    if (!file.value) return;

    isUploading.value = true;
    const formData = new FormData();
    formData.append('file', file.value);

    try {
        const response = await axios.post('/api/save-file', formData, {
            headers: {
                'Content-Type': 'multipart/form-data',
            },
        });
        uploadUrl.value = response.data.url;
    } catch (error) {
        console.error('File upload failed:', error);
    } finally {
        isUploading.value = false;
    }
};

const copyToClipboard = () => {
    if (uploadUrl.value) {
        navigator.clipboard.writeText(uploadUrl.value).then(() => {
            alert('URL copied to clipboard!');
        });
    }
};
</script>