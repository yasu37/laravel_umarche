<x-tests.app>
  <x-slot name="header">
    ヘッダー１
  </header>
コンポーネント１
  <x-tests.card title="タイトル1" content="本文1"  :message="$message"></x-tests.card>
  <x-tests.card title="タイトル2"></x-tests.card>
  <x-tests.card title="タイトル3" class="bg-red-300"></x-tests.card>
</x-tests.app>
