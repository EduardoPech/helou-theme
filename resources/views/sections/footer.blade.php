<footer class="content-info border-t border-gray-200 py-4 bg-indigo-100 shadow-inner">
  @php(dynamic_sidebar('sidebar-footer'))
  <div class="container mx-auto flex justify-between items-center">
    <p class="text-dark-900 text-base font-medium">
      &copy; {{ date('Y') }} {{ $siteName }}
    </p>
  </div>
</footer>
