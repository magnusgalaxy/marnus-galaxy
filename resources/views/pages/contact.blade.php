@extends('layouts.app')
@section('content')
<div class="py-16 lg:py-20">
    <div>
        <img src="{{ asset('assets/site-images/icon-contact.png') }}" alt="icon envelope" />
    </div>
    <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">Contact</h1>

    <div class="pr-2 pt-3 sm:pt-0">
        <p class="font-body text-xl font-light text-primary dark:text-white">
            Got a question or proposal, or just want to say hello? Go ahead. You know what to do.
        </p>
    </div>
    <div class="pt-10">
        @if($errors->any())
            {!! implode('', $errors->all('<div class="text-red-700">:message</div>')) !!}
        @endif

        @if (session('success'))
            <div class="text-lime-600">{{ session('success') }}</div>
        @endif
    </div>
    <form method="post" class="pt-16">
        @csrf
        <div class="flex flex-col sm:flex-row">
            <div class="w-full sm:mr-3 sm:w-1/2">
                <label class="block pb-3 font-body font-medium text-primary dark:text-white">Your Name</label>
                <input type="text" id="name" name="name" placeholder="What should I call you?" class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light  placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary"/>
            </div>
            <div class="w-full pt-6 sm:ml-3 sm:w-1/2 sm:pt-0">
                <label class="block pb-3 font-body font-medium text-primary dark:text-white">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Drop that email here…" class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light text-primary placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary"/>
            </div>
        </div>
        <div class="w-full pt-6 sm:pt-10">
            <label class="block pb-3 font-body font-medium text-primary dark:text-white">Message</label>
            <textarea id="message" cols="30" rows="9" name="message" placeholder="Tell me all the things that you think I need to hear…" class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light text-primary placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary"></textarea>
        </div>
        <button type="submit" class="mt-10 mb-12 block bg-secondary px-10 py-4 text-center font-body text-xl font-semibold text-white transition-colors hover:bg-green sm:inline-block sm:text-left sm:text-2xl">
            Send Message
        </button>
    </form>
</div>
@endsection