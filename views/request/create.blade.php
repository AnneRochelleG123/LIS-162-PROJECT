<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Request</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-6">Create a New Request</h1>

        @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('requests.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf

            <!-- User ID -->
            <div class="mb-4">
                <label for="user_id" class="block text-sm font-medium text-gray-700">User ID</label>
                <input type="number" name="user_id" id="user_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('user_id') }}" required>
            </div>

            <!-- Request Type -->
            <div class="mb-4">
                <label for="request_type" class="block text-sm font-medium text-gray-700">Request Type</label>
                <input type="text" name="request_type" id="request_type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('request_type') }}" required>
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ old('status') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ old('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <!-- Date and Time Submitted -->
            <div class="mb-4">
                <label for="date_time_submitted" class="block text-sm font-medium text-gray-700">Date and Time Submitted</label>
                <input type="datetime-local" name="date_time_submitted" id="date_time_submitted" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ old('date_time_submitted') }}" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                Submit Request
            </button>
        </form>
    </div>
</body>
</html>
