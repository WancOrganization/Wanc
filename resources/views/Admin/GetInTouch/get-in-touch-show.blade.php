@extends('Admin.layouts.base')

@section('page-title', 'View Contact Message')

@section('content')
    <div class="max-w-2xl">
        <div class="mb-6">
            <a href="{{ route('admin.get-in-touch.index') }}" class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Messages
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
            <div class="flex items-center justify-between p-6 border-b border-gray-200">
                <h2 class="text-lg font-semibold text-gray-900">{{ $getInTouch->name }}</h2>
                <div class="flex items-center space-x-2">
                    <a href="{{ route('admin.get-in-touch.edit', $getInTouch->id) }}" class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Edit
                    </a>
                </div>
            </div>

            <div class="p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Name</label>
                        <p class="text-gray-900">{{ $getInTouch->name }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Mobile Number</label>
                        <p class="text-gray-900">{{ $getInTouch->mobile_number }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Date</label>
                        <p class="text-gray-900">{{ date('M d, Y', strtotime($getInTouch->created_at)) }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-1">Time</label>
                        <p class="text-gray-900">{{ date('h:i A', strtotime($getInTouch->created_at)) }}</p>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Subject</label>
                    <p class="text-gray-900">{{ $getInTouch->subject }}</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Message</label>
                    <p class="text-gray-900 whitespace-pre-wrap">{{ $getInTouch->message }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
