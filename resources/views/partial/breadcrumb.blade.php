<nav class="relative w-3/4 m-auto flex flex-wrap items-center justify-between py-3 bg-gray-100 text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg navbar navbar-expand-lg navbar-light">
    <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
      <nav class="bg-grey-light rounded-md w-full" aria-label="breadcrumb">
        <ol class="list-reset flex">
          <li><a href="/" class="text-gray-500 hover:text-gray-600">Home</a></li>
          <li><span class="text-gray-500 mx-2">/</span></li>
          <li><a href="/about" class="text-gray-500 hover:text-gray-600">{{ Request::segment(1) }}</a></li>
        </ol>
      </nav>
    </div>
  </nav>
