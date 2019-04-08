@extends('master')

@section('title')
Farm Safety | St. Anne's City Farm
@endsection

@section('content')
<div class="pig-banner h-10r flex justify-center items-center">
    <h1 class="text-grey-lightest text-6xl">Farm Safety</h1>
</div>

<div class="w-full bg-grey-lightest">

    <div class="container mx-auto">
        <h2 class="text-center text-4xl my-4">Farm rules for your safety</h2>
    </div>
    <div class="container mx-auto flex flex-row flex-wrap">

        <div class="w-full md:w-1/4 flex justify-center items-center">
            <div>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 93.6 68.4" class="h-48 fill-current text-grey-darkest"><title>safety</title><path d="M653.66,388.46a7.62,7.62,0,0,0,.85-5.54l-1.41-6.19a11.41,11.41,0,0,1-.28-2.47l-.06-7.09a2.65,2.65,0,0,0-2.5-2.72,2.59,2.59,0,0,0-2.52,2.53l-.61,9.39v.15l-.26-.75-2.7-7.7L648,353.34a2.88,2.88,0,0,0-1.8-3.51,1,1,0,0,0-1.24.57l-5.27,10.71a3.28,3.28,0,0,0-.23.59l-2.39,9a6.26,6.26,0,0,0,.1,3.51l4.4,13.5a9.79,9.79,0,0,1,.48,3.13l-.12,9,10.2.13.1-7.73a5.07,5.07,0,0,1,.71-2.52Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><g opacity="0.1"><path d="M647.35,389.21l-.14,10.66-5.29-.07.12-9a9.75,9.75,0,0,0-.48-3.13l-4.4-13.5a6.26,6.26,0,0,1-.1-3.51l2.39-9a3.28,3.28,0,0,1,.23-.59L645,350.4a1,1,0,0,1,1.24-.57,2.68,2.68,0,0,1,.92.51L642.53,362a1.4,1.4,0,0,0-.09.29L641,370.44a4.38,4.38,0,0,0,.21,2.35Z" transform="translate(-636.85 -349.79)"/></g><rect x="4.37" y="44.23" width="12" height="6.96" fill="#f2f2f2"/><rect x="3.45" y="51.18" width="13.83" height="16.3" fill="#4d4d4d"/><path d="M652.23,403.72a.85.85,0,0,1-.84.84.84.84,0,0,1-.83-.84.83.83,0,0,1,.83-.83A.84.84,0,0,1,652.23,403.72Z" transform="translate(-636.85 -349.79)" fill="#e6e6e6"/><path d="M652.23,407.06a.84.84,0,0,1-.84.83.83.83,0,0,1-.83-.83.84.84,0,0,1,.83-.84A.85.85,0,0,1,652.23,407.06Z" transform="translate(-636.85 -349.79)" fill="#e6e6e6"/><path d="M652.23,410.39a.84.84,0,0,1-.84.83.83.83,0,0,1,0-1.66A.84.84,0,0,1,652.23,410.39Z" transform="translate(-636.85 -349.79)" fill="#e6e6e6"/><g opacity="0.1"><polygon points="10.68 44.23 4.37 44.23 4.37 51.18 3.46 51.18 3.46 67.48 10.68 67.48 10.68 44.23"/></g><path d="M713.44,388.36a7.59,7.59,0,0,1-.78-5.55l1.49-6.18a11.27,11.27,0,0,0,.31-2.46l.15-7.09a2.66,2.66,0,0,1,2.53-2.69,2.6,2.6,0,0,1,2.49,2.57l.49,9.39v.15l.27-.74,2.8-7.67-3.64-14.77a2.88,2.88,0,0,1,1.84-3.49,1,1,0,0,1,1.23.59l5.14,10.77a3.89,3.89,0,0,1,.22.6l2.27,9a6.17,6.17,0,0,1-.14,3.51l-4.57,13.44a9.47,9.47,0,0,0-.52,3.13v9h-10.2v-7.73a5.17,5.17,0,0,0-.67-2.53Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><g opacity="0.1"><path d="M712.66,382.81a7.59,7.59,0,0,0,.78,5.55l.72,1.23a5.14,5.14,0,0,1,.67,2.53v7.73h4.91V389.19l6.39-16.34a4.48,4.48,0,0,0,.24-2.35L725,362.32a2.45,2.45,0,0,0-.08-.29l-4.43-11.7a3,3,0,0,0-.92,3l3.63,14.77-2.79,7.67-.27.74v-.15l-.49-9.39a2.6,2.6,0,0,0-2.49-2.57,2.66,2.66,0,0,0-2.53,2.69l-.15,7.09a11.27,11.27,0,0,1-.31,2.46Z" transform="translate(-636.85 -349.79)"/></g><rect x="77" y="44.23" width="12" height="6.96" fill="#f2f2f2"/><rect x="76.08" y="51.18" width="13.83" height="16.3" fill="#4d4d4d"/><path d="M714.85,403.72a.84.84,0,0,0,.83.84.85.85,0,0,0,.84-.84.84.84,0,0,0-.84-.83A.83.83,0,0,0,714.85,403.72Z" transform="translate(-636.85 -349.79)" fill="#e6e6e6"/><path d="M714.85,407.06a.83.83,0,0,0,.83.83.84.84,0,0,0,.84-.83.85.85,0,0,0-.84-.84A.84.84,0,0,0,714.85,407.06Z" transform="translate(-636.85 -349.79)" fill="#e6e6e6"/><path d="M714.85,410.39a.83.83,0,0,0,.83.83.83.83,0,1,0,0-1.66A.83.83,0,0,0,714.85,410.39Z" transform="translate(-636.85 -349.79)" fill="#e6e6e6"/><g opacity="0.1"><polygon points="82.89 44.23 77 44.23 77 51.18 76.08 51.18 76.08 67.48 82.89 67.48 82.89 44.23"/></g><path d="M664.56,363.55v2.53c0,.49,1.19.88,2.34,1.3l.1,0,.1,0c1.15-.42,2.34-.81,2.34-1.3v-2.53Z" transform="translate(-636.85 -349.79)" fill="#f5c386"/><path d="M667,364.89h-.28c-1.29,0-1.71-.41-3-2.41a5.63,5.63,0,0,1-.62-2.33c-.32.05-.67-.44-.8-1.1s0-1.27.36-1.34h0a.42.42,0,0,1,.31.11,3.33,3.33,0,0,1,.26,1.12c.13,0,0-.08.1-.11-.83-5.76,1.7-5.38,3-5.4,0,0,.65,0,.67,0s.65,0,.67,0c1.33,0,3.86-.36,3,5.4.06,0,0,.11.1.11a3.33,3.33,0,0,1,.26-1.12.44.44,0,0,1,.31-.11h0c.33.07.48.67.36,1.34s-.48,1.15-.8,1.1a5.48,5.48,0,0,1-.62,2.33c-1.33,2-1.74,2.41-3,2.41H667Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><path d="M667,351.82a9.61,9.61,0,0,0-1.63.13,3.61,3.61,0,0,0-1.61.53,3.06,3.06,0,0,0-1.18,1.8,15,15,0,0,0,0,3.42h0c.42,0,.55.85.57,1.23a.37.37,0,0,0,.18,0c-.83-5.76,1.43-4.53,2.86-4.28a7.32,7.32,0,0,0,2,.19,2,2,0,0,1-.78-.34s.77,0,.87,0-.4-.05-.52-.18a5.85,5.85,0,0,0,.81-.06c1.13,0,2.58.59,2,4.66a.33.33,0,0,0,.17,0c0-.38.16-1.28.57-1.23h0a15,15,0,0,0,0-3.42,3.06,3.06,0,0,0-1.18-1.8,3.61,3.61,0,0,0-1.61-.53A9.61,9.61,0,0,0,667,351.82Z" transform="translate(-636.85 -349.79)" fill="#d35400" fill-rule="evenodd"/><rect x="23.66" y="21.96" width="12.97" height="17.36" fill="#1abc9c"/><path d="M658.11,373.27v-2.36a2.66,2.66,0,0,1,1.84-2.53l3.7-1.55h0l2,2.14,1.28-1.59.1,0,.1,0,1.28,1.59,2-2.14h0l3.71,1.55a2.67,2.67,0,0,1,1.83,2.53l.17,1.83-2.57.81Z" transform="translate(-636.85 -349.79)" fill="#1abc9c" fill-rule="evenodd"/><path d="M667,367.41,665.62,369l-2-2.14.9-1v.26C664.56,366.57,665.85,367,667,367.41Z" transform="translate(-636.85 -349.79)" fill="#ededed"/><path d="M667,367.41l1.38,1.56,2-2.14-.9-1v.26C669.44,366.57,668.15,367,667,367.41Z" transform="translate(-636.85 -349.79)" fill="#ededed"/><rect x="21.26" y="23.35" width="2.4" height="1.1" fill="#ededed"/><path d="M667,369.2a.4.4,0,1,1,.4-.4A.4.4,0,0,1,667,369.2Z" transform="translate(-636.85 -349.79)" fill="#ededed"/><path d="M667,370.65a.4.4,0,1,1,.4-.4A.4.4,0,0,1,667,370.65Z" transform="translate(-636.85 -349.79)" fill="#ededed"/><path d="M667,372.09a.4.4,0,1,1,.4-.4A.4.4,0,0,1,667,372.09Z" transform="translate(-636.85 -349.79)" fill="#ededed"/><rect x="24.42" y="39.32" width="5.19" height="27.14" fill="#34495e"/><rect x="30.69" y="39.32" width="5.19" height="27.14" fill="#34495e"/><rect x="28.88" y="39.32" width="2.54" height="2.2" fill="#34495e"/><path d="M663.87,414.87c-1.5,0-2.71.18-2.71,2.35h5.42C666.58,415,665.37,414.87,663.87,414.87Z" transform="translate(-636.85 -349.79)" fill="#7f8c8d" fill-rule="evenodd"/><rect x="24.3" y="67.18" width="5.42" height="0.9" fill="#bdc3c7"/><path d="M670.13,414.87c1.5,0,2.71.18,2.71,2.35h-5.42C667.42,415,668.64,414.87,670.13,414.87Z" transform="translate(-636.85 -349.79)" fill="#7f8c8d" fill-rule="evenodd"/><rect x="30.57" y="67.18" width="5.42" height="0.9" fill="#bdc3c7"/><polygon points="23.66 39.32 21.71 39.29 21.37 24.45 23.66 24.45 23.66 39.32" fill="#ffd098"/><polygon points="37.94 37.96 39.88 37.76 38.92 22.95 36.63 23.15 37.94 37.96" fill="#ffd098"/><path d="M659.85,391.56l.24.41,0,1.06a.61.61,0,0,0,.19.4.56.56,0,0,0,.41.15.32.32,0,0,0,.31-.34l-.11-2.38a2.83,2.83,0,0,0-.14-.76l-.33-1.05-1.91,0-.6,1.38a3.35,3.35,0,0,0-.27,1.29V393a.89.89,0,0,0,.15.5l1.11,1.6a.3.3,0,0,0,.38.11.6.6,0,0,0,.32-.34.61.61,0,0,0,0-.46l-.59-1.28v-.36a1,1,0,0,1,.3-.71Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><path d="M675.67,390.13l-.21.44,0,1.06a.61.61,0,0,1-.15.41.57.57,0,0,1-.4.18.32.32,0,0,1-.34-.3l-.1-2.39a2.8,2.8,0,0,1,.07-.76l.24-1.09,1.9-.13.72,1.32a3.29,3.29,0,0,1,.38,1.26l.12,1.26a.85.85,0,0,1-.11.52l-1,1.7a.34.34,0,0,1-.37.14.67.67,0,0,1-.35-.31.59.59,0,0,1,0-.47l.47-1.32,0-.36a1,1,0,0,0-.36-.69Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><g opacity="0.1"><path d="M666.46,416.18V391.3H667V351.82a9.61,9.61,0,0,0-1.63.13,3.61,3.61,0,0,0-1.61.53,3.06,3.06,0,0,0-1.18,1.8,15,15,0,0,0,0,3.42h0c-.32.07-.48.67-.36,1.34s.48,1.15.8,1.1a5.63,5.63,0,0,0,.62,2.33c.34.52.63.94.88,1.26v2.08l-.9,1h0l-3.7,1.55a2.66,2.66,0,0,0-1.84,2.53v3.33h.11l.34,14.84h0l-.6,1.38a3.35,3.35,0,0,0-.27,1.29V393a.89.89,0,0,0,.15.5l1.11,1.6a.3.3,0,0,0,.38.11.6.6,0,0,0,.32-.34.61.61,0,0,0,0-.46l-.59-1.28v-.36a1,1,0,0,1,.3-.71l.51-.52.24.41,0,1.06a.61.61,0,0,0,.19.4.56.56,0,0,0,.41.15.32.32,0,0,0,.31-.34l-.11-2.38a2.83,2.83,0,0,0-.14-.76l-.31-1h.78v27.11a3.73,3.73,0,0,0-.11.75h0v.9h5.42V417h0A3.42,3.42,0,0,0,666.46,416.18Zm-3.28-57.44a1.5,1.5,0,0,1,0,.2A1.23,1.23,0,0,0,663.18,358.74Z" transform="translate(-636.85 -349.79)"/></g><polygon points="36.63 24.07 39.32 23.76 39.2 22.78 36.63 23.1 36.63 24.07" fill="#ededed"/><polygon points="57.93 38.8 56.37 38.62 57.85 23.35 60.13 23.65 57.93 38.8" fill="#ffd098"/><path d="M694,390.56l.16.36-.08.87a.48.48,0,0,0,.43.51.27.27,0,0,0,.29-.24l.16-1.95a2.22,2.22,0,0,0,0-.63l-.16-.9-1.55-.17-.63,1.06a2.65,2.65,0,0,0-.36,1l-.14,1a.82.82,0,0,0,.07.43l.73,1.41a.26.26,0,0,0,.3.13.46.46,0,0,0,.29-.24.46.46,0,0,0,0-.38l-.34-1.1,0-.29a.83.83,0,0,1,.31-.55Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><path d="M702.16,355.09c.67,0,5.65-.07,4.89,6.19-.43,3.61-.19,4.85,1,6.09-.68.85-2.5,2-5.93,1.59-3.44.4-5.25-.74-5.94-1.59,1.21-1.24,1.45-2.48,1-6.09-.77-6.37,4.4-6.22,4.93-6.19Z" transform="translate(-636.85 -349.79)" fill="#dba73d"/><path d="M700.17,365.7v2.35c0,.45,1.94,1,2,1.05s2-.6,2-1.05V365.7Z" transform="translate(-636.85 -349.79)" fill="#f5c386"/><path d="M706,360.57h0a.37.37,0,0,0-.27.09,3.19,3.19,0,0,0-.22.91.22.22,0,0,1,0,.08h0c-.11,0,0-.07-.08-.1v0c.4-2.82-.12-4-.87-4.41l-.11-.06h0a3.65,3.65,0,0,0-1.68-.23s-.45,0-.56,0h-.06c-.12,0-.55,0-.56,0a3.68,3.68,0,0,0-1.69.23h0l-.11.06c-.75.45-1.27,1.59-.87,4.41v0s0,.1-.08.1h0s0,0,0-.08a3.19,3.19,0,0,0-.22-.91.37.37,0,0,0-.27-.09h0c-.28.06-.42.59-.31,1.18v0s0,.11,0,.17a.75.75,0,0,1,0,.16l0,0,0,.06c.12.29.3.48.47.5a.11.11,0,0,0,.08,0h0a4.07,4.07,0,0,0,.68,1.92c1.15,1.73,2.23,2.27,2.79,2.28s1.63-.55,2.79-2.28a4.3,4.3,0,0,0,.68-1.92h0a.11.11,0,0,0,.08,0c.17,0,.34-.21.47-.49l0-.07a0,0,0,0,1,0,0,1.42,1.42,0,0,0,0-.16,1.36,1.36,0,0,0,0-.17s0,0,0,0C706.42,361.16,706.28,360.63,706,360.57Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><path d="M702.14,369.1c-1-.36-2-.84-2-1.27v-.23l-1,1,1.73,1.88Z" transform="translate(-636.85 -349.79)" fill="#ededed"/><polygon points="68.23 18.8 68.23 18.8 66.5 20.69 66.5 20.69 68.23 18.8" fill="#fff"/><path d="M702.14,369.1h0l-1.22,1.37h0S702,369.31,702.14,369.1Z" transform="translate(-636.85 -349.79)" fill="#fff"/><polygon points="62.34 18.8 62.34 18.8 62.33 18.81 62.33 18.81 62.33 18.81 62.34 18.8" fill="#fff"/><polygon points="68.23 18.81 68.23 18.81 68.23 18.8 68.23 18.8 68.23 18.81 68.23 18.81" fill="#fff"/><path d="M703.35,370.47l-1.21-1.37h0c.17.21,1.21,1.37,1.21,1.37Z" transform="translate(-636.85 -349.79)" fill="#fff"/><polygon points="64.07 20.69 62.34 18.8 62.34 18.8 64.07 20.69 64.07 20.69" fill="#fff"/><path d="M705.08,368.59l-1-1v.23c0,.42-.9.88-1.88,1.24l-.08,0,1.21,1.37,1.73-1.88Z" transform="translate(-636.85 -349.79)" fill="#ededed"/><path d="M706.08,359.36l0-.08-.77-2.43-2.81-.8-.23.09-3.09.69-.74,2.9,0,.09a5.61,5.61,0,0,0,2.39-.28,1,1,0,0,1-.18.28,6.12,6.12,0,0,0,1-.35,6.54,6.54,0,0,0,1.48-1.1A10.53,10.53,0,0,0,706.08,359.36Z" transform="translate(-636.85 -349.79)" fill="#dba73d"/><path d="M701.34,417.53c0,.48-.36.66-1.58.66-1.46,0-1.66-.16-1.66-.65,0-.23,0-.55,0-1,0-1.41.49-2.55,1.54-2.58s1.47.87,1.58,2.36A6.94,6.94,0,0,1,701.34,417.53Z" transform="translate(-636.85 -349.79)" fill="#e94e1b"/><path d="M702.93,417.53c0,.48.36.66,1.58.66,1.46,0,1.67-.16,1.67-.65,0-.23-.06-.55,0-1,0-1.41-.48-2.55-1.54-2.58s-1.46.87-1.58,2.36A10,10,0,0,0,702.93,417.53Z" transform="translate(-636.85 -349.79)" fill="#e94e1b"/><path d="M698.7,415c0,2,2.12,1.74,2,0l.39-14.45-3.84.08Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><path d="M705.57,415c0,2-2.12,1.74-2,0l-.4-14.45,3.84.08Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><path d="M705.72,381.36h-7.17c-2.43,4.56-2.62,11.87-4,19.69h15.19C708.34,393.23,708.15,385.92,705.72,381.36Z" transform="translate(-636.85 -349.79)" fill="#e94e1b"/><path d="M701.35,417.53c0,.48-.36.66-1.59.66-1.45,0-1.66-.16-1.66-.65a2.48,2.48,0,0,1,3.25,0Z" transform="translate(-636.85 -349.79)" fill="#d14618"/><path d="M702.93,417.53c0,.48.35.66,1.58.66,1.45,0,1.66-.16,1.66-.65a2.47,2.47,0,0,0-3.24,0Z" transform="translate(-636.85 -349.79)" fill="#d14618"/><path d="M709.79,373.23c0-.22-.12-.46-.2-.71a6,6,0,0,0-.55-1.25,3,3,0,0,0-1.27-1.24l-2.68-1.43h0l-1.73,1.88s-1-1.17-1.21-1.38c-.17.21-1.22,1.38-1.22,1.38l-1.73-1.88h0L696.5,370a3,3,0,0,0-1.27,1.24,8.13,8.13,0,0,0-.93,3l2.58.72,2.53,10.24h5.45l2.59-10.48,2.52-.48A7.05,7.05,0,0,0,709.79,373.23Z" transform="translate(-636.85 -349.79)" fill="#e94e1b"/><polygon points="72.96 38.06 71.39 38.09 70.74 24.92 72.96 24.5 72.96 38.06" fill="#ffd098"/><path d="M708.82,389.92l-.19.34v.88a.47.47,0,0,1-.14.33.51.51,0,0,1-.33.13.27.27,0,0,1-.27-.27l0-1.95a2.28,2.28,0,0,1,.09-.63l.24-.87,1.57,0,.52,1.12a2.5,2.5,0,0,1,.26,1l0,1a.68.68,0,0,1-.11.42l-.86,1.35a.25.25,0,0,1-.31.09.46.46,0,0,1-.27-.26.5.5,0,0,1,0-.38l.44-1.07v-.29a.8.8,0,0,0-.26-.58Z" transform="translate(-636.85 -349.79)" fill="#ffd098"/><g opacity="0.1"><path d="M701.26,416.36a3.75,3.75,0,0,0-.51-1.85l.36-13.46h1v-46c-.57,0-5.68-.15-4.92,6.19.43,3.61.19,4.85-1,6.09a4.67,4.67,0,0,0,2.58,1.44L696.5,370a3,3,0,0,0-1.27,1.24,8.13,8.13,0,0,0-.93,3l.29.08-1.36,14.07-.63,1.06a2.65,2.65,0,0,0-.36,1l-.14,1a.82.82,0,0,0,.07.43l.73,1.41a.26.26,0,0,0,.3.13.46.46,0,0,0,.29-.24.46.46,0,0,0,0-.38l-.34-1.1,0-.29a.83.83,0,0,1,.31-.55l.47-.37.16.36-.08.87a.48.48,0,0,0,.43.51.27.27,0,0,0,.29-.24l.16-1.95a2.22,2.22,0,0,0,0-.63l-.16-.9,2-13.63.12,0,1.61,6.51c-2.37,4.56-2.57,11.81-4,19.56h2.79l1.32,13.5a3.21,3.21,0,0,0-.51,2c0,.41,0,.73,0,1,0,.49.2.65,1.66.65h0c1.23,0,1.55-.18,1.59-.66h0A6.94,6.94,0,0,0,701.26,416.36Z" transform="translate(-636.85 -349.79)"/></g><polygon points="48.99 66.03 50.41 66.02 50.66 60.43 48.83 60.43 48.99 66.03" fill="#ffdbb1"/><polygon points="47.12 66.03 45.7 66.02 45.46 60.43 47.28 60.43 47.12 66.03" fill="#ffdbb1"/><rect x="48.9" y="66.02" width="1.62" height="0.84" fill="#226d9c"/><rect x="45.57" y="66.02" width="1.62" height="0.84" fill="#226d9c"/><polygon points="48.72 54.82 48.33 54.82 47.76 54.82 47.37 54.82 45 54.82 45 62.47 47.76 62.47 47.76 57.66 48.33 57.66 48.33 62.47 51.09 62.47 51.09 54.82 48.72 54.82" fill="#2984bd" fill-rule="evenodd"/><path d="M683.24,416.28c-.8,0-1.44.09-1.44,1.24h2.88C684.68,416.32,684,416.28,683.24,416.28Z" transform="translate(-636.85 -349.79)" fill="#2984bd" fill-rule="evenodd"/><rect x="44.94" y="67.6" width="2.88" height="0.48" fill="#bdc3c7"/><path d="M686.57,416.28c.79,0,1.44.09,1.44,1.24h-2.88C685.13,416.32,685.77,416.28,686.57,416.28Z" transform="translate(-636.85 -349.79)" fill="#2984bd" fill-rule="evenodd"/><rect x="48.27" y="67.6" width="2.88" height="0.48" fill="#bdc3c7"/><rect x="46.02" y="66.19" width="0.73" height="0.16" fill="#fff"/><rect x="46.02" y="66.63" width="0.73" height="0.16" fill="#fff"/><rect x="46.02" y="66.95" width="0.73" height="0.16" fill="#fff"/><rect x="49.35" y="66.19" width="0.73" height="0.16" fill="#fff"/><rect x="49.35" y="66.63" width="0.73" height="0.16" fill="#fff"/><rect x="49.35" y="66.95" width="0.73" height="0.16" fill="#fff"/><path d="M677.79,397.35l-.53-2.82h0l.13-.54a1.44,1.44,0,0,0,0-.41v-1.27a.18.18,0,0,0-.18-.17.35.35,0,0,0-.21.1.27.27,0,0,0-.09.21V393l-.12.22-.29-.26a.53.53,0,0,1-.17-.36v-.2l.27-.69a.31.31,0,0,0,0-.25.3.3,0,0,0-.18-.17.15.15,0,0,0-.19.07l-.54.88a.53.53,0,0,0-.07.28l0,.67a2.08,2.08,0,0,0,.18.68l.36.71h0l.23,2.91a.92.92,0,0,0,1,.78l.31-.94Z" transform="translate(-636.85 -349.79)" fill="#ffdbb1"/><polygon points="43.29 46.82 40.51 46.72 40.64 48.51 43.42 48.71 43.29 46.82" fill="#ffdbb1"/><path d="M692,397.35l.53-2.82h0l-.14-.54a1.44,1.44,0,0,1-.05-.41v-1.27a.18.18,0,0,1,.18-.17.35.35,0,0,1,.21.1.27.27,0,0,1,.09.21V393l.12.22.29-.26a.49.49,0,0,0,.17-.36v-.2l-.27-.69a.31.31,0,0,1,0-.25.3.3,0,0,1,.18-.17.15.15,0,0,1,.19.07l.54.88a.45.45,0,0,1,.07.28l0,.67a2.08,2.08,0,0,1-.18.68l-.36.71h0l-.23,2.91a.92.92,0,0,1-1,.78l-.31-.94Z" transform="translate(-636.85 -349.79)" fill="#ffdbb1"/><polygon points="52.74 46.82 55.52 46.72 55.4 48.51 52.61 48.71 52.74 46.82" fill="#ffdbb1"/><polygon points="48.05 46.82 46.75 46.68 44.6 46.72 44.6 46.72 41.52 46.66 41.73 49.08 44.59 49.25 44.6 49.9 44.6 55.81 51.5 55.81 51.5 49.9 51.5 49.25 54.37 49.08 54.58 46.66 51.5 46.72 51.5 46.72 49.34 46.68 48.05 46.82" fill="#ffc229" fill-rule="evenodd"/><path d="M683.6,396.6v-1.86h2.6v1.86A1.49,1.49,0,0,1,683.6,396.6Z" transform="translate(-636.85 -349.79)" fill="#ffcf94"/><path d="M684.9,388.61a3.28,3.28,0,0,0-3.23,3.06.5.5,0,0,0-.44-.22c-.31,0-.51.47-.45,1s.51,1,1,.84h0a3.13,3.13,0,0,0,6.2,0h0c.5.14.94-.34,1-.84s-.13-.93-.45-1a.52.52,0,0,0-.44.22A3.28,3.28,0,0,0,684.9,388.61Z" transform="translate(-636.85 -349.79)" fill="#ffdbb1"/><path d="M684.9,389.41c-.93,0-2.94.49-3,2.42-.28-.08-.07-.09-.31-.28a3.17,3.17,0,0,1,2.34-3.6c.13,0-.25-.36.28-1.09.3.94,1.57,1.05,1.76,1.09a3.16,3.16,0,0,1,2.32,3.6c-.24.19,0,.2-.31.28C687.85,389.9,685.83,389.41,684.9,389.41Z" transform="translate(-636.85 -349.79)" fill="#d35400" fill-rule="evenodd"/><g opacity="0.1"><path d="M684.05,416.35v-.54H684l.11-3.56h.54v-4.8h.25V387.64a1.35,1.35,0,0,1-.7-.78c-.53.73-.15,1.06-.28,1.09a3.17,3.17,0,0,0-2.34,3.6.37.37,0,0,1,.09.09.48.48,0,0,0-.41-.19c-.31,0-.51.47-.45,1s.51,1,1,.84h0a3.87,3.87,0,0,0,1.8,2.38v.85l-2.15,0-3.07-.06v.09l-.75,0-.37-2h0l.13-.54a1.44,1.44,0,0,0,0-.41v-1.27a.18.18,0,0,0-.18-.17.35.35,0,0,0-.21.1.27.27,0,0,0-.09.21V393l-.12.22-.29-.26a.53.53,0,0,1-.17-.36v-.2l.27-.69a.31.31,0,0,0,0-.25.3.3,0,0,0-.18-.17.15.15,0,0,0-.19.07l-.54.88a.53.53,0,0,0-.07.28l0,.67a2.08,2.08,0,0,0,.18.68l.36.71h0l.23,2.91a.92.92,0,0,0,1,.78l1,.08,0,.5,2.87.17v6.56h.41v6.65h.54l.16,3.56h-.13v.56c-.36.12-.59.4-.62,1h0v.48h2.88v-.48h0C684.64,416.74,684.4,416.46,684.05,416.35Z" transform="translate(-636.85 -349.79)"/></g></svg>
            </div>
        </div>

        <div class="w-full md:w-3/4 flex justify-center">
            <div class="px-6 py-6 ml-6">
                <p class="leading-loose text-xl"><i class="fas fa-check pr-4"></i>Wash and dry hands thoroughly after contact with any animals, before eating and drinking, and before leaving the farm after your visit.</p>
                <p class="leading-loose text-xl"><i class="fas fa-check pr-4"></i>The farm has a hand washing point besdie the Kiosk.</p>
                <p class="leading-loose text-xl"><i class="fas fa-check pr-4"></i>Use soap and water, and dry with paper towels. Gels are not an effective substitute.</p>
                <p class="leading-loose text-xl"><i class="fas fa-check pr-4"></i>Cover cuts and grazes on children’s hands or bare skin with a waterproof dressing. Contacted a volunteer if you need a plaster or need help.</p>
                <p class="leading-loose text-xl"><i class="fas fa-check pr-4"></i>Do not eat in the farmyard, the farm has a picnic area for lunches and snacks at the front of the farm near the Cabin.</p>
            </div>
        </div>

    </div>

</div>

@endsection


@section('scripts')

@endsection