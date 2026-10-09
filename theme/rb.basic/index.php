<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_THEME_PATH.'/head.php');
?>
<!-- === 그누보드 리빌더용 인덱스 시작 === -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          brand: {
            900: '#064e3b',
            800: '#065f46',
            700: '#047857',
            600: '#059669',
            500: '#10b981',
            400: '#34d399',
            300: '#6ee7b7',
            200: '#a7f3d0',
            100: '#d1fae5',
            50:  '#ecfdf5',
          },
          accent: {
            600: '#84cc16',
            500: '#a3e635',
            400: '#bef264',
          }
        },
        fontFamily: {
          sans: ["Pretendard", "ui-sans-serif", "system-ui", "sans-serif"],
        }
      }
    }
  }
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard.min.css" />
<style>
  html, body {
    font-family: "Pretendard", ui-sans-serif, system-ui, sans-serif !important;
  }
  .gnuboard-rebuilder-wrapper {
    background-color: #ffffff; /* white */
    color: #1e293b; /* slate-800 */
  }
</style>

<div class="gnuboard-rebuilder-wrapper w-full bg-white flex flex-col pt-[40px] pb-[0px] font-sans text-left">
      <main class="flex-1 w-full grid grid-cols-1 md:grid-cols-12 auto-rows-min gap-4 lg:gap-5">

        <!-- 1. Hero Section -->
        <div class="md:col-span-12 lg:col-span-7 bg-brand-900 rounded-3xl p-8 md:p-10 flex flex-col justify-center text-white relative overflow-hidden shadow-sm group">
          <div class="absolute inset-0 z-0 opacity-20 group-hover:opacity-30 group-hover:scale-105 transition-all duration-1000">
            <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&q=80&w=1200" alt="Legal consultation background" class="w-full h-full object-cover mix-blend-luminosity" />
            <div class="absolute inset-0 bg-gradient-to-r from-brand-900 via-brand-900/80 to-transparent"></div>
          </div>
          <div class="absolute top-0 right-0 p-6 opacity-10 z-10 w-48 h-48">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-dollar-sign text-white"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
          </div>
          <h1 class="text-3xl md:text-4xl lg:text-5xl font-black tracking-tight mb-4 leading-tight relative z-10 text-white">
            수원 개인회생·개인파산 상담
          </h1>
          <h2 class="text-lg md:text-xl font-medium mb-4 text-brand-100 relative z-10">
             혼자 고민하지 마세요. 상황에 맞는 해결 방법을 안내해드립니다.
          </h2>
          <p class="text-brand-50/80 text-base md:text-lg mb-8 leading-relaxed font-light relative z-10 max-w-lg">
            과도한 채무, 연체, 압류, 독촉으로 힘든 상황이라면<br />
            개인회생과 개인파산 가능 여부를 빠르게 확인해보세요.
          </p>
          <div class="flex flex-wrap gap-2 relative z-10">
            <span class="bg-brand-400/20 px-4 py-2 rounded-full text-sm font-medium border border-brand-400/30 text-brand-50">#수원개인회생상담</span>
            <span class="bg-brand-400/20 px-4 py-2 rounded-full text-sm font-medium border border-brand-400/30 text-brand-50">#개인파산자격검토</span>
            <span class="bg-brand-400/20 px-4 py-2 rounded-full text-sm font-medium border border-brand-400/30 text-brand-50">#채무조정가능여부</span>
            <span class="bg-brand-400/20 px-4 py-2 rounded-full text-sm font-medium border border-brand-400/30 text-brand-50">#준비서류안내</span>
          </div>
        </div>

        <!-- 2. Quick Contact -->
        <div class="md:col-span-12 lg:col-span-5 bg-white rounded-3xl border border-brand-100 p-8 shadow-sm flex flex-col items-center justify-center text-center relative overflow-hidden group">
          <div class="absolute top-0 left-0 w-full h-32 z-0 opacity-[0.12]">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32d7?auto=format&fit=crop&q=80&w=800" alt="Customer Support" class="w-full h-full object-cover [mask-image:linear-gradient(to_bottom,black,transparent)] group-hover:scale-105 transition-transform duration-700" />
          </div>
          <span class="relative z-10 text-brand-700 font-bold uppercase tracking-widest text-xs mb-3 bg-white px-3 py-1 rounded-full shadow-sm border border-brand-100">Fast Consultation</span>
          <div class="relative z-10 text-slate-500 text-sm mb-2 mt-4">빠른 유선 상담번호</div>
          <a href="tel:0503-6982-1000" class="relative z-10 text-4xl md:text-5xl font-black text-brand-900 mb-8 hover:text-brand-700 transition-colors drop-shadow-sm">
            0503-6982-1000
          </a>
          <div class="relative z-10 flex flex-col sm:flex-row lg:flex-col xl:flex-row w-full gap-3">
            <a
              href="tel:0503-6982-1000"
              class="flex-1 py-4 bg-brand-800 text-white rounded-2xl font-bold flex items-center justify-center gap-2 hover:bg-brand-900 transition-colors shadow-md hover:shadow-lg"
            >
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 fill-current"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/><path d="M14.05 2a9 9 0 0 1 8 7.94"/><path d="M14.05 6A5 5 0 0 1 18 10"/></svg>
              전화 상담하기
            </a>
            <a
              href="https://pf.kakao.com/_tZbTn/chat" target="_blank" rel="noopener noreferrer"
              class="flex-1 py-4 bg-[#FEE500] text-[#000000] rounded-2xl font-bold flex items-center justify-center gap-2 hover:bg-[#FDD800] transition-colors border border-[#FEE500]"
            >
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>
              카카오톡 상담
            </a>
          </div>
        </div>

        <!-- 3. Regional SEO Block -->
        <div class="md:col-span-12 bg-white rounded-3xl p-8 border border-slate-200 shadow-sm flex flex-col md:flex-row items-center gap-6 justify-between relative overflow-hidden group">
          <div class="absolute right-0 top-0 w-1/2 md:w-1/3 h-full z-0 opacity-15">
            <img src="https://images.unsplash.com/photo-1449034446853-66c86144b0ad?auto=format&fit=crop&q=80&w=600" alt="City Background" class="w-full h-full object-cover [mask-image:linear-gradient(to_left,black,transparent)] group-hover:scale-110 transition-transform duration-1000" />
          </div>
          <div class="flex-1 relative z-10">
            <h3 class="text-xl md:text-2xl font-bold text-slate-800 mb-3 tracking-tight">
              수원 지역 개인회생·개인파산 상담이 필요하신가요?
            </h3>
            <p class="text-slate-600 leading-relaxed text-sm md:text-base">
              <strong class="text-brand-700 font-semibold">수원, 수원시, 팔달구, 영통구, 권선구</strong> 등 
              지역에서 개인회생, 개인파산, 신용회복 상담을 찾는 분들을 위해 
              자격 검토부터 절차, 준비서류 안내까지 확실하게 도와드립니다.
            </p>
          </div>
          <div class="hidden md:flex shrink-0 w-16 h-16 bg-slate-50 rounded-2xl items-center justify-center border border-slate-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-brand-600"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
          </div>
        </div>

        <!-- 4. Core Services Grid -->
        <div class="md:col-span-6 lg:col-span-3 bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:border-brand-300 hover:shadow-md transition-all group cursor-pointer" onclick="location.href='<?php echo G5_URL; ?>/페이지경로1';">
          <div class="bg-brand-50 w-12 h-12 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-brand-700"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
          </div>
          <h3 class="font-bold text-slate-800 mb-2 text-lg">개인회생 자격 확인</h3>
          <p class="text-sm text-slate-500 leading-relaxed">
            소득이 있지만 채무를 감당하기 어려운 경우 개인회생 신청 가능 여부를 확인할 수 있습니다.
          </p>
        </div>

        <div class="md:col-span-6 lg:col-span-3 bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:border-brand-300 hover:shadow-md transition-all group cursor-pointer" onclick="location.href='<?php echo G5_URL; ?>/페이지경로2';">
          <div class="bg-brand-50 w-12 h-12 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-brand-700"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
          </div>
          <h3 class="font-bold text-slate-800 mb-2 text-lg">개인파산 상담</h3>
          <p class="text-sm text-slate-500 leading-relaxed">
            소득 활동이 어렵거나 변제 능력이 부족한 경우 개인파산과 면책 가능성을 객관적으로 검토합니다.
          </p>
        </div>

        <div class="md:col-span-6 lg:col-span-3 bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:border-brand-300 hover:shadow-md transition-all group cursor-pointer" onclick="location.href='<?php echo G5_URL; ?>/페이지경로3';">
          <div class="bg-brand-50 w-12 h-12 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-brand-700"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
          </div>
          <h3 class="font-bold text-slate-800 mb-2 text-lg">채무조정 절차 안내</h3>
          <p class="text-sm text-slate-500 leading-relaxed">
            신청 전 준비서류, 접수 절차, 현명한 대처 방법부터 법원 진행 과정까지 알기 쉽게 안내합니다.
          </p>
        </div>

        <div class="md:col-span-6 lg:col-span-3 bg-white rounded-3xl p-6 border border-slate-200 shadow-sm hover:border-brand-300 hover:shadow-md transition-all group cursor-pointer" onclick="location.href='<?php echo G5_URL; ?>/페이지경로4';">
          <div class="bg-brand-50 w-12 h-12 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-brand-700"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/><path d="M12 8v4"/><path d="M12 16h.01"/></svg>
          </div>
          <h3 class="font-bold text-slate-800 mb-2 text-lg">압류·독촉 문제</h3>
          <p class="text-sm text-slate-500 leading-relaxed">
            급여·통장 압류, 카드연체, 대출독촉 등 긴급하게 처한 상황에 맞는 해결 방향을 제시합니다.
          </p>
        </div>

        <!-- 5. What is Personal Rehabilitation -->
        <div class="md:col-span-12 lg:col-span-6 bg-brand-50 rounded-3xl p-8 border border-brand-100 shadow-sm flex flex-col relative overflow-hidden group">
          <div class="absolute right-0 top-0 w-48 h-48 z-0 opacity-[0.04] group-hover:opacity-[0.06] transition-opacity">
            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=80&w=600" alt="Finance icon" class="w-full h-full object-cover [mask-image:radial-gradient(circle_at_top_right,black,transparent_70%)]" />
          </div>
          <div class="relative z-10 flex items-center gap-3 mb-5">
            <div class="w-10 h-10 bg-white rounded-xl shadow-sm flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-brand-600"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18" y2="11"/><line x1="10" x2="10" y1="18" y2="11"/><line x1="14" x2="14" y1="18" y2="11"/><line x1="18" x2="18" y1="18" y2="11"/><polygon points="12 2 20 7 4 7"/></svg>
            </div>
            <h3 class="text-2xl font-bold tracking-tight text-slate-900">
              개인회생이란?
            </h3>
          </div>
          <p class="text-base text-slate-700 leading-relaxed mb-6 bg-white p-4 rounded-2xl shadow-sm">
            개인회생은 <strong class="text-brand-700">일정한 소득이 있는 채무자</strong>가 법원의 절차를 통해 일정 기간 동안 가능한 범위 내에서 변제하고 남은 채무에 대해 면책을 받을 수 있는 제도입니다.
          </p>
          <div class="mt-auto">
            <h4 class="text-sm font-bold text-brand-900 mb-3 flex items-center gap-2">
              <span class="w-1.5 h-4 bg-brand-500 rounded-full inline-block"></span>
              이런 분들이 상담 대상입니다
            </h4>
            <ul class="space-y-2">
              <li class="flex items-center gap-2 text-sm text-slate-700 bg-white/50 px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-brand-500 shrink-0"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <span>카드값과 대출금 상환이 어려운 분</span>
              </li>
              <li class="flex items-center gap-2 text-sm text-slate-700 bg-white/50 px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-brand-500 shrink-0"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <span>급여압류나 통장압류가 걱정되는 분</span>
              </li>
              <li class="flex items-center gap-2 text-sm text-slate-700 bg-white/50 px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-brand-500 shrink-0"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <span>연체와 독촉으로 일상생활이 힘든 분</span>
              </li>
              <li class="flex items-center gap-2 text-sm text-slate-700 bg-white/50 px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-brand-500 shrink-0"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                <span>채무는 많지만 일정한 소득이 있는 분</span>
              </li>
            </ul>
          </div>
        </div>

        <!-- 6. What is Personal Bankruptcy -->
        <div class="md:col-span-12 lg:col-span-6 bg-white rounded-3xl p-8 border border-slate-200 shadow-sm flex flex-col relative overflow-hidden group">
          <div class="absolute right-0 top-0 w-48 h-48 z-0 opacity-[0.04] group-hover:opacity-[0.06] transition-opacity">
            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&q=80&w=600" alt="Document icon" class="w-full h-full object-cover [mask-image:radial-gradient(circle_at_top_right,black,transparent_70%)]" />
          </div>
          <div class="relative z-10 flex items-center gap-3 mb-5">
            <div class="w-10 h-10 bg-slate-50 rounded-xl shadow-sm flex items-center justify-center shrink-0 border border-slate-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 text-slate-600"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
            </div>
            <h3 class="text-2xl font-bold tracking-tight text-slate-900">
              개인파산이란?
            </h3>
          </div>
          <p class="text-base text-slate-700 leading-relaxed mb-6 bg-slate-50 p-4 rounded-2xl border border-slate-100">
            개인파산은 <strong class="text-slate-900">현재 소득이나 재산으로 채무를 변제하기 어려운 경우</strong> 법원을 통해 파산 및 면책 가능성을 검토하는 제도입니다.
          </p>
          <div class="mt-auto">
            <h4 class="text-sm font-bold text-slate-800 mb-3 flex items-center gap-2">
              <span class="w-1.5 h-4 bg-slate-800 rounded-full inline-block"></span>
              이런 분들이 상담 대상입니다
            </h4>
            <ul class="space-y-2">
              <li class="flex items-center gap-2 text-sm text-slate-700 bg-slate-50 px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-slate-400 shrink-0"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                <span>소득이 거의 없거나 경제활동이 어려운 분</span>
              </li>
              <li class="flex items-center gap-2 text-sm text-slate-700 bg-slate-50 px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-slate-400 shrink-0"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                <span>채무 변제가 현실적으로 불가능한 분</span>
              </li>
              <li class="flex items-center gap-2 text-sm text-slate-700 bg-slate-50 px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-slate-400 shrink-0"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                <span>장기간 연체와 독촉을 겪고 있는 분</span>
              </li>
              <li class="flex items-center gap-2 text-sm text-slate-700 bg-slate-50 px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 text-slate-400 shrink-0"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>
                <span>개인회생보다 파산이 적합한지 확인하고 싶은 분</span>
              </li>
            </ul>
          </div>
        </div>

        <?php
          // 그누보드 최신글 추출 예시 (게시판 스킨을 별도로 만들거나 여기서 직접 출력)
          // 아래는 디자인에 맞춰 임의로 작성된 정적 HTML입니다.
          // 실제 그누보드 게시판(bo_table=story 등)과 연동하려면 latest() 함수를 사용하세요.
          // 예) echo latest('basic_main', 'story', 5, 40);
        ?>
        <!-- 7. Board Sections -->
        <div class="md:col-span-12 lg:col-span-4 bg-white rounded-3xl border border-slate-200 p-6 shadow-sm overflow-hidden flex flex-col">
          <div class="flex justify-between items-center mb-4">
            <h4 class="font-bold text-brand-800 flex items-center gap-2 text-lg">
              <span class="w-1.5 h-5 bg-brand-500 rounded-full"></span>신용회복경험담
            </h4>
            <a href="<?php echo G5_URL; ?>/bbs/board.php?bo_table=story" class="text-[10px] text-slate-400 font-bold uppercase cursor-pointer hover:text-brand-600 transition-colors">Story →</a>
          </div>
          <p class="text-xs text-slate-500 mb-4 h-8">실제 채무 문제로 어려움을 겪었던 분들의 경험담을 확인해보세요.</p>
          <ul class="space-y-3 flex-1">
<?php
$bo_table = 'story';
$write_table = isset($g5['write_prefix']) ? $g5['write_prefix'] . $bo_table : '';
$i = 1;

if ($write_table && function_exists('sql_query')) {
    $sql = " select * from {$write_table} where wr_is_comment = 0 order by wr_hit desc limit 5 ";
    $result = sql_query($sql, false); // 테이블이 없으면 false 반환
    if ($result) {
        while ($row = sql_fetch_array($result)) {
            $is_hot = ($i <= 3) ? '<span class="bg-red-50 text-red-500 text-[10px] font-bold px-1.5 py-0.5 rounded shrink-0">HOT</span>' : '';
            $num_color = ($i <= 3) ? 'text-accent-500' : 'text-slate-400';
            $href = G5_BBS_URL.'/board.php?bo_table='.$bo_table.'&amp;wr_id='.$row['wr_id'];
?>
            <li class="flex justify-between items-center text-sm <?php echo $i < 5 ? 'border-b border-slate-50 pb-2' : ''; ?>">
              <div class="flex items-center gap-2 overflow-hidden flex-1 mr-2">
                <span class="font-bold w-4 text-center shrink-0 <?php echo $num_color; ?>"><?php echo $i; ?></span>
                <a href="<?php echo $href; ?>" class="text-slate-700 truncate hover:text-brand-700 transition-colors"><?php echo get_text($row['wr_subject']); ?></a>
                <?php echo $is_hot; ?>
              </div>
              <span class="text-slate-400 shrink-0 text-xs flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                <?php echo number_format($row['wr_hit']); ?>
              </span>
            </li>
<?php
            $i++;
        }
    }
}

// 게시글이 없거나 테이블이 생성되지 않은 경우 더미 데이터 출력
if ($i == 1) {
    $dummy_data = array(
        array('subj' => '감당할 수 없던 카드빚, 드디어 인가결정 받았습니다.', 'hit' => 1250),
        array('subj' => '코로나로 사업 실패 후 막막했는데 희망이 보입니다.', 'hit' => 980),
        array('subj' => '통장압류 해제! 다시 정상적인 생활을 시작합니다.', 'hit' => 845),
        array('subj' => '급여압류의 두려움에서 벗어났습니다. 감사합니다.', 'hit' => 620),
        array('subj' => '도박 빚도 회생이 가능하더군요. 새 삶을 살겠습니다.', 'hit' => 430)
    );
    foreach ($dummy_data as $index => $row) {
        $num = $index + 1;
        $is_hot = ($num <= 3) ? '<span class="bg-red-50 text-red-500 text-[10px] font-bold px-1.5 py-0.5 rounded shrink-0">HOT</span>' : '';
        $num_color = ($num <= 3) ? 'text-accent-500' : 'text-slate-400';
?>
            <li class="flex justify-between items-center text-sm <?php echo $num < 5 ? 'border-b border-slate-50 pb-2' : ''; ?>">
              <div class="flex items-center gap-2 overflow-hidden flex-1 mr-2">
                <span class="font-bold w-4 text-center shrink-0 <?php echo $num_color; ?>"><?php echo $num; ?></span>
                <a href="<?php echo isset($g5['url']) ? $g5['url'] : ''; ?>/bbs/board.php?bo_table=story" class="text-slate-700 truncate hover:text-brand-700 transition-colors"><?php echo $row['subj']; ?></a>
                <?php echo $is_hot; ?>
              </div>
              <span class="text-slate-400 shrink-0 text-xs flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                <?php echo number_format($row['hit']); ?>
              </span>
            </li>
<?php
    }
}
?>
          </ul>
        </div>

        <div class="md:col-span-12 lg:col-span-4 bg-white rounded-3xl border border-slate-200 p-6 shadow-sm overflow-hidden flex flex-col">
          <div class="flex justify-between items-center mb-4">
            <h4 class="font-bold text-brand-800 flex items-center gap-2 text-lg">
              <span class="w-1.5 h-5 bg-brand-500 rounded-full"></span>개인회생·개인파산 뉴스
            </h4>
            <a href="<?php echo G5_URL; ?>/bbs/board.php?bo_table=news" class="text-[10px] text-slate-400 font-bold uppercase cursor-pointer hover:text-brand-600 transition-colors">News →</a>
          </div>
          <p class="text-xs text-slate-500 mb-4 h-8">개인회생, 개인파산, 채무조정 관련 최신 소식과 정보를 확인해보세요.</p>
          <ul class="space-y-3 flex-1">
<?php
$bo_table_news = 'news';
$write_table_news = isset($g5['write_prefix']) ? $g5['write_prefix'] . $bo_table_news : '';
$n = 1;

if ($write_table_news && function_exists('sql_query')) {
    $sql = " select * from {$write_table_news} where wr_is_comment = 0 order by wr_datetime desc limit 5 ";
    $result = sql_query($sql, false);
    if ($result) {
        while ($row = sql_fetch_array($result)) {
            $href = G5_BBS_URL.'/board.php?bo_table='.$bo_table_news.'&amp;wr_id='.$row['wr_id'];
            $date = date("m.d", strtotime($row['wr_datetime']));
?>
            <li class="flex justify-between items-center text-sm <?php echo $n < 5 ? 'border-b border-slate-50 pb-2' : ''; ?>">
              <a href="<?php echo $href; ?>" class="text-slate-700 truncate flex-1 mr-2 hover:text-brand-700 transition-colors"><?php echo get_text($row['wr_subject']); ?></a>
              <span class="text-slate-400 shrink-0 text-xs"><?php echo $date; ?></span>
            </li>
<?php
            $n++;
        }
    }
}

if ($n == 1) {
    $dummy_news = array(
        array('subj' => '[필독] 2024년 개인회생 최저생계비 기준 인상 안내', 'date' => '05.12'),
        array('subj' => '개인파산 면책 기준 및 주요 기각 사유 완화 움직임', 'date' => '05.09'),
        array('subj' => '청년 채무자를 위한 변제기간 단축 판례 소개', 'date' => '05.01'),
        array('subj' => '수원지방법원 개인회생 업무 처리 동향', 'date' => '04.20'),
        array('subj' => '가상화폐 투자 손실, 개인회생 처리 기준 변경 안내', 'date' => '04.15')
    );
    foreach ($dummy_news as $index => $row) {
        $num = $index + 1;
?>
            <li class="flex justify-between items-center text-sm <?php echo $num < 5 ? 'border-b border-slate-50 pb-2' : ''; ?>">
              <a href="<?php echo isset($g5['url']) ? $g5['url'] : ''; ?>/bbs/board.php?bo_table=news" class="text-slate-700 truncate flex-1 mr-2 hover:text-brand-700 transition-colors"><?php echo $row['subj']; ?></a>
              <span class="text-slate-400 shrink-0 text-xs"><?php echo $row['date']; ?></span>
            </li>
<?php
    }
}
?>
          </ul>
        </div>

        <div class="md:col-span-12 lg:col-span-4 bg-white rounded-3xl border border-slate-200 p-6 shadow-sm overflow-hidden flex flex-col">
          <div class="flex justify-between items-center mb-4">
            <h4 class="font-bold text-brand-800 flex items-center gap-2 text-lg">
              <span class="w-1.5 h-5 bg-brand-500 rounded-full"></span>채무증대경위서 샘플
            </h4>
            <a href="<?php echo G5_URL; ?>/bbs/board.php?bo_table=sample" class="text-[10px] text-slate-400 font-bold uppercase cursor-pointer hover:text-brand-600 transition-colors">Sample →</a>
          </div>
          <p class="text-xs text-slate-500 mb-4 h-8">채무증대경위서 신청의 필수 요건 작성 방향을 샘플을 통해 참고하세요.</p>
          <ul class="space-y-3 flex-1">
<?php
$bo_table_sample = 'sample';
$write_table_sample = isset($g5['write_prefix']) ? $g5['write_prefix'] . $bo_table_sample : '';
$s = 1;

if ($write_table_sample && function_exists('sql_query')) {
    $sql = " select * from {$write_table_sample} where wr_is_comment = 0 order by wr_datetime desc limit 5 ";
    $result = sql_query($sql, false);
    if ($result) {
        while ($row = sql_fetch_array($result)) {
            $href = G5_BBS_URL.'/board.php?bo_table='.$bo_table_sample.'&amp;wr_id='.$row['wr_id'];
            $date = date("m.d", strtotime($row['wr_datetime']));
?>
            <li class="flex justify-between items-center text-sm <?php echo $s < 5 ? 'border-b border-slate-50 pb-2' : ''; ?>">
              <a href="<?php echo $href; ?>" class="text-slate-700 truncate flex-1 mr-2 hover:text-brand-700 transition-colors"><?php echo get_text($row['wr_subject']); ?></a>
              <span class="text-slate-400 shrink-0 text-xs"><?php echo $date; ?></span>
            </li>
<?php
            $s++;
        }
    }
}

if ($s == 1) {
    $dummy_sample = array(
        array('subj' => '채무증대경위서 작성 예시 - 생활비 부족 및 주식 투자 손실', 'date' => '05.10'),
        array('subj' => '채무증대경위서 작성 샘플 - 사업 실패 및 사기 피해', 'date' => '05.05'),
        array('subj' => '채무증대경위서 예시 - 병원비 지출 및 카드 돌려막기', 'date' => '04.28'),
        array('subj' => '경위서 작성 요령 - 솔직하고 객관적으로 작성하는 법', 'date' => '04.20'),
        array('subj' => '보증 청구로 인한 채무증대 시 작성 방법 샘플', 'date' => '04.10')
    );
    foreach ($dummy_sample as $index => $row) {
        $num = $index + 1;
?>
            <li class="flex justify-between items-center text-sm <?php echo $num < 5 ? 'border-b border-slate-50 pb-2' : ''; ?>">
              <a href="<?php echo isset($g5['url']) ? $g5['url'] : ''; ?>/bbs/board.php?bo_table=sample" class="text-slate-700 truncate flex-1 mr-2 hover:text-brand-700 transition-colors"><?php echo $row['subj']; ?></a>
              <span class="text-slate-400 shrink-0 text-xs"><?php echo $row['date']; ?></span>
            </li>
<?php
    }
}
?>
          </ul>
        </div>

        <!-- 8. Final CTA -->
        <div class="md:col-span-12 bg-brand-900 rounded-3xl p-8 md:p-12 border border-brand-800 shadow-xl flex flex-col items-center text-center mt-2 relative overflow-hidden group">
           <div class="absolute inset-0 z-0">
             <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&q=80&w=1200" alt="Support hand background" class="w-full h-full object-cover opacity-10 mix-blend-luminosity group-hover:scale-105 transition-transform duration-1000" />
             <div class="absolute inset-0 bg-gradient-to-t from-brand-900 via-brand-900/80 to-transparent"></div>
           </div>
           <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-brand-500 via-accent-500 to-brand-500 z-10"></div>
           <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 relative z-10">
             지금 상황이 막막하다면 먼저 상담부터 받아보세요
           </h3>
           <p class="text-brand-100 text-sm md:text-base max-w-2xl mb-8 leading-relaxed relative z-10">
             개인회생과 개인파산은 개인의 소득, 재산, 채무 규모 등에 따라 진행 가능 여부가 달라질 수 있습니다. 혼자 판단하기보다 전문가와 현재 상황을 점검하세요.
           </p>
           <div class="flex flex-col sm:flex-row items-center gap-4 relative z-10">
             <div class="text-center sm:text-right sm:pr-6 sm:border-r border-brand-700">
                <div class="text-accent-400 font-bold text-sm mb-1 tracking-widest">상담전화</div>
                <div class="text-3xl md:text-4xl font-black text-white">0503-6982-1000</div>
             </div>
             <a href="tel:0503-6982-1000" class="px-8 py-4 bg-accent-500 text-brand-900 rounded-xl font-bold shadow-lg shadow-accent-500/20 hover:bg-accent-400 hover:scale-105 transition-all text-lg">
               전화상담 연결
             </a>
           </div>
        </div>

      </main>
</div>
<!-- === 그누보드 리빌더용 인덱스 끝 === -->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
