@foreach ($messages as $msg)
  <div class="msg-box msg-{{ $msg['type'] }}">
    {{ $msg['message'] }}
  </div>
@endforeach

<style>
  .msg-box {
    display: block;
    padding: 12px 30px;
    border-radius: 5px;
    margin-top: 10px;
    margin-bottom: 10px;
    width: fit-content;
  }

  .msg-info {
    background-color: #d9faff;
    border: 1px solid #0481b5;
    color: #06577d;
  }

  .msg-success {
    background-color: #c8ffd1;
    border: 1px solid #176635;
    color: #08621c;
  }

  .msg-alert {
    background-color: #ffe1ba;
    border: 1px solid #aa5200;
    color: #c24903;
  }

  .msg-error {
    background-color: #ffdada;
    border: 1px solid #ff4d4d;
    color: #b30000;
  }
</style>
