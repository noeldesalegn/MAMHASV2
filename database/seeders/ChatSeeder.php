<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chats;
use App\Models\Messages;
use App\Models\User;

class ChatSeeder extends Seeder
{
    public function run(): void
    {
        // Get one physician and one patient
        $physician = User::where('user_account_type', 'physician')->first();
        $patient = User::where('user_account_type', 'patient')->first();

        // If they exist, create a chat
        if ($physician && $patient) {
            $chat = Chats::firstOrCreate([
                'physician_id' => $physician->id,
                'patient_id' => $patient->id,
            ]);

            // Seed with 5 example messages
            Messages::create([
                'chat_id' => $chat->id,
                'sender_id' => $physician->id,
                'message' => 'Hello, how can I help you today?',
                'read' => true,
            ]);

            Messages::create([
                'chat_id' => $chat->id,
                'sender_id' => $patient->id,
                'message' => 'I have a question about my prescription.',
                'read' => false,
            ]);

            Messages::create([
                'chat_id' => $chat->id,
                'sender_id' => $physician->id,
                'message' => 'Sure, go ahead.',
                'read' => false,
            ]);
        } else {
            $this->command->warn('No physician or patient found. Please seed users first.');
        }
    }
}
