<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

import HeadingSmall from '@/components/HeadingSmall.vue';
import { type BreadcrumbItem } from '@/types';

import AppLayout from '@/layouts/AppLayout.vue';
import SettingsLayout from '@/layouts/settings/Layout.vue';

const breadcrumbItems: BreadcrumbItem[] = [
    {
        title: 'Premium settings',
        href: '/settings/premium',
    },
];

const isSubscribed = ref(false);
const isProcessing = ref(false);

// Form for making authenticated requests
const form = useForm({});

const checkSubscriptionStatus = async () => {
    try {
        const response = await form.get('/api/subscription-status', {}, { preserveState: true });
        isSubscribed.value = response.isSubscribed;
    } catch (error) {
        console.error('Failed to check subscription status:', error);
    }
};

const redirectToBillingPortal = async () => {
    try {
        isProcessing.value = true;
        const response = await form.post('/api/billing-portal', {}, { preserveState: true });
        window.location.href = response.url;
    } catch (error) {
        console.error('Failed to redirect to billing portal:', error);
    } finally {
        isProcessing.value = false;
    }
};

const subscribeToPremium = async () => {
    try {
        isProcessing.value = true;
        await form.post('/api/subscribe', {}, { preserveState: true });
        isSubscribed.value = true;
        alert('Subscription successful!');
    } catch (error) {
        console.error('Failed to subscribe:', error);
    } finally {
        isProcessing.value = false;
    }
};

// Check subscription status on page load
checkSubscriptionStatus();
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbItems">
        <Head title="Premium settings" />

        <SettingsLayout>
            <div class="space-y-6">
                <HeadingSmall title="Premium settings" description="Manage your premium subscription" />

                <div v-if="isSubscribed" class="space-y-4">
                    <p class="text-green-600">You are currently subscribed to the premium plan.</p>
                    <button
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600"
                        :disabled="isProcessing"
                        @click="redirectToBillingPortal"
                    >
                        {{ isProcessing ? 'Redirecting...' : 'Go to Billing Portal' }}
                    </button>
                </div>

                <div v-else class="space-y-4">
                    <p class="text-red-600">You are not subscribed to the premium plan.</p>
                    <button
                        class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600"
                        :disabled="isProcessing"
                        @click="subscribeToPremium"
                    >
                        {{ isProcessing ? 'Processing...' : 'Subscribe to Premium' }}
                    </button>
                </div>
            </div>
        </SettingsLayout>
    </AppLayout>
</template>