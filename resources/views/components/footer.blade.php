<div class="bg-[#0a1f63] py-12 px-4 mb-5 text-white font-poppins">
    <!-- Container utama -->
    <div class="max-w-7xl mx-auto">
      
      <!-- Bagian atas: Logo dan informasi alamat -->
      <div class="flex flex-col md:flex-row justify-between items-start mb-10">
        <!-- Logo dan alamat -->
        <div class="w-full md:w-1/3 flex flex-col items-center md:items-start mb-8 md:mb-0">
          <img src="{{ asset('assets/umnradio.webp') }}" alt="UMN Radio Logo" class="w-32 mb-4 drop-shadow-sm">
          <div class="text-center md:text-left">
            <p class="text-sm text-gray-200">Jalan Scientia Boulevard</p>
            <p class="text-sm text-gray-200">Universitas Multimedia Nusantara, Gedung B lt. 6</p>
            <p class="text-sm text-gray-200">Tangerang, Banten 15811, ID</p>
          </div>
        </div>
        
        <!-- Menu navigasi - diubah menjadi vertikal -->
        <div class="w-full md:w-1/3 mb-8 md:mb-0">
          <h3 class="text-lg font-bold mb-4 text-center md:text-left">Menu</h3>
          <div class="flex flex-col space-y-1 items-center md:items-start">
            <a href="/" class="text-gray-200 hover:text-[#a0a0a0] text-sm">Home</a>
            <a href="/articles" class="text-gray-200 hover:text-[#a0a0a0] text-sm">Articles</a>
            <a href="/programs" class="text-gray-200 hover:text-[#a0a0a0] text-sm">Programs</a>
            <a href="https://open.spotify.com/show/6ytg0qKpDz9ehq2fjklepU" class="text-gray-200 hover:text-[#a0a0a0] text-sm">U PODCAST</a>
            <a href="/about" class="text-gray-200 hover:text-[#a0a0a0] text-sm">About</a>
          </div>
        </div>
        
        <!-- Media sosial - diubah menjadi vertikal -->
        <div class="w-full md:w-1/3">
            <h3 class="text-lg font-bold mb-4 text-center md:text-left">Connect With Us</h3>
            <div class="flex flex-wrap justify-center md:justify-start gap-4 mb-4">
              <!-- Line Icon -->
              <a target="_" href="https://liff.line.me/1645278921-kWRPP32q/?accountId=umnradio" 
                 class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-300 border-slate-400 hover:border-[#a0a0a0] hover:bg-[#a0a0a0] hover:text-white">
                <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>LINE UMN Radio</title>
                  <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.494.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771h.001zm-5.74-1.294c.346 0 .628.283.628.629 0 .344-.282.629-.63.629H4.933c-.346 0-.628-.285-.628-.629V8.108c0-.345.283-.63.63-.63.345 0 .627.285.627.63v3.477H9.77zM24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
                </svg>
              </a>
              
              <!-- Instagram Icon -->
              <a target="_" href="https://www.instagram.com/umnradio" 
                 class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-300 border-slate-400 hover:border-[#a0a0a0] hover:bg-[#a0a0a0] hover:text-white">
                <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram UMN Radio</title>
                  <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                </svg>
              </a>
              
              <!-- Twitter/X Icon -->
              <a target="_" href="https://twitter.com/UMNRADIO" 
                 class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-300 border-slate-400 hover:border-[#a0a0a0] hover:bg-[#a0a0a0] hover:text-white">
                <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Twitter UMN Radio</title>
                  <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                </svg>
              </a>
              
              <!-- YouTube Icon -->
              <a target="_" href="https://www.youtube.com/channel/UCeVl4fsOVkU7yVCurgoq5Lg" 
                 class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-300 border-slate-400 hover:border-[#a0a0a0] hover:bg-[#a0a0a0] hover:text-white">
                <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>YouTube UMN Radio</title>
                  <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                </svg>
              </a>
              
              <!-- LinkedIn Icon -->
              <a target="_" href="https://www.linkedin.com/company/umn-radio/" 
                 class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-300 border-slate-400 hover:border-[#a0a0a0] hover:bg-[#a0a0a0] hover:text-white">
                <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>LinkedIn UMN Radio</title>
                  <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                </svg>
              </a>
              
              <!-- Email Icon -->
              <a target="_" href="mailto:daniel.nicholas@umn.ac.id" 
                 class="w-9 h-9 rounded-full flex justify-center items-center border text-slate-300 border-slate-400 hover:border-[#a0a0a0] hover:bg-[#a0a0a0] hover:text-white">
                <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Email UMN Radio</title>
                  <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/>
                </svg>
              </a>
            </div>
            <p class="text-sm text-gray-300 text-center md:text-left">Ikuti kami di media sosial untuk mendapatkan informasi terbaru tentang UMN Radio</p>
          </div>
      </div>
      
      <!-- Bagian email departemen -->
      <div class="border-t border-blue-800 pt-8 mb-8">
        <h3 class="text-xl font-bold text-center mb-6">Email Us</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
          <!-- Partnership -->
          <div class="text-center md:text-left">
            <h4 class="font-bold mb-2 text-base">Partnership</h4>
            <a href="mailto:umnradio.partnership@gmail.com" class="flex items-center justify-center md:justify-start text-gray-200 hover:text-white group">
              <img src="{{ asset('assets/gmail.webp') }}" alt="Email" class="w-5 h-5 mr-2">
              <span class="text-sm group-hover:text-[#a0a0a0]">umnradio.partnership@gmail.com</span>
            </a>
          </div>
          
          <!-- Media Affairs -->
          <div class="text-center md:text-left">
            <h4 class="font-bold mb-2 text-base">Media Affairs</h4>
            <a href="mailto:media.umnradio@umn.ac.id" class="flex items-center justify-center md:justify-start text-gray-200 hover:text-white group">
              <img src="{{ asset('assets/gmail.webp') }}" alt="Email" class="w-5 h-5 mr-2">
              <span class="text-sm group-hover:text-[#a0a0a0]">media.umnradio@umn.ac.id</span>
            </a>
          </div>
          
          <!-- Public Relations -->
          <div class="text-center md:text-left">
            <h4 class="font-bold mb-2 text-base">Public Relations</h4>
            <a href="mailto:umnradio.pr@gmail.com" class="flex items-center justify-center md:justify-start text-gray-200 hover:text-white group">
              <img src="{{ asset('assets/gmail.webp') }}" alt="Email" class="w-5 h-5 mr-2">
              <span class="text-sm group-hover:text-[#a0a0a0]">umnradio.pr@gmail.com</span>
            </a>
          </div>
          
          <!-- Music Inquiries -->
          <div class="text-center md:text-left">
            <h4 class="font-bold mb-2 text-base">Music Inquiries</h4>
            <a href="mailto:md.umnradio@gmail.com" class="flex items-center justify-center md:justify-start text-gray-200 hover:text-white group">
              <img src="{{ asset('assets/gmail.webp') }}" alt="Email" class="w-5 h-5 mr-2">
              <span class="text-sm group-hover:text-[#a0a0a0]">md.umnradio@gmail.com</span>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Copyright -->
      <div class="border-t border-blue-800 pt-6 text-center">
        <p class="text-gray-400 text-sm">© 2022-{{ now()->year }} UMN Radio</p>
        <p class="text-gray-400 text-sm">Dikelola oleh IT & Software Development UMN Radio</p>
      </div>
    </div>
  </div>