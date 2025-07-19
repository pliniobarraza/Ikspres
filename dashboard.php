

<div id="global" class="settings">
  <div class="callout callout-danger">Unable to create ZIP file to download</div>
  <div class="callout callout-warning">On-board sound card appears active and will interfere with hardware PWM. Try a reboot first, next toggle the Enable PI Hardware PWM setting below and reboot. If issues persist check /boot/config.txt and comment out dtparam=audio=on</div>
  <div>Detected <b>' . $transmitterType . '</b> on I<sup>2</sup>C ' . $i2cBusType . ' bus ' . $i2cbus . ' at address ' . $transmitterAddress . '</div>
  
  
  <div class='callout callout-default'>
    <h3>RDS Style Text Guide</h3>
    Values from File Tags or Track Info
    <ul><li>{T} = Title</li>
    <li>{A} = Artist</li>
    <li>{B} = Album</li>
    <li>{G} = Genre</li></ul>
  </div>
  <h2>MQTT</h2><div class="callout callout-default">H2</div>

  <button name="ReinstallScript" onClick="">Reinstall plugin dependencies</button>
  HERE WE WILL BE ABLE TO CONFIGURE AND CONTROLL IKSPRESS


  <h2>Report an Issue</h2>
  <div class="container-fluid settingsTable settingsGroupTable">
  <p>
  <form action="plugin.php?_menu=status&plugin=Dynamic_RDS&page=Dynamic_RDS.php&nopage" method="post">
  <button name="DownloadZip" type="Submit" class="buttons" value="Download log and config zip"><i class="fas fa-fw fa-nbsp fa-download"></i>Download log and config zip</button>
  </form></p>
  <p>Create a new issue at file.</p>
  Zip file includes:
  <ul>
  <li>Logs - <tt>Dynamic_RDS_callbacks.log</tt> and <tt>Dynamic_RDS_Engine.log</tt></li>
  <li>Config - <tt>plugin.Dynamic_RDS</tt></li>
  <li>Version from <tt>git rev-parse --short HEAD</tt></li>
  <li>Pi/BBB boot config - <tt>/boot/config.txt</tt> or <tt>/boot/uEnv.txt</tt></li>
  </ul>
  </div>
  <br />

  
  https://github.com/pliniobarraza/Ikspres/blob/master/dashboard.php?>
</div>
