
<?
 /api/plugin/Ikspres/settings/IkspresPwm330mA
  def readAPISetting(self, settingName):
    try:
      with urlopen(f'http://localhost/api/plugin/Ikspres/settings/IkspresPwm330mA') as response:
        return json.loads(response.read())
    except Exception:
      logging.exception("readAPISetting %s", settingName)
    return ''

    value=self.readAPISetting('HostName')['value']

?>
<h1>FPP-ɪkspres</h1>


<div class="card has-shadow playlistCard buttonActionsParent">
  <h2 class="card-title">wɪp</h2>
  <div class="text-center"><p class="card-text mb-2 text-muted">TEXT</p></div>
  <div class="buttonActions">
    <button class="playlistCardEditButton circularButton circularButton-sm circularEditButton">Edit</button>
  </div>
</div>
<?
print_r($settings);
?>
<div class="backdrop fppPluginEntryBackdrop">
  <h2>wɪp</h2>
  <div class="row">
    <div class="col-lg-3"><h3 class="pluginTitle">wɪp</h3></div>
    <div class="col-lg-3"><h3 class="pluginTitle">wɪp</h3></div>
  </div>
  <div class="row">
    <div class="col-lg-3"><h3 class="pluginTitle">wɪp</h3></div>
    <div class="col-lg-3"><h3 class="pluginTitle">wɪp</h3></div>
  </div>
  <div class="text-success fppPluginEntryInstallStatus">
    <i class="far fa-check-circle"></i> <b>Installed</b>
  </div>
</div>


<h2>wɪp</h2><div class="callout callout-default">wɪp</div>
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
  

  <button name="ReinstallScript" onClick="">Reinstall plugin dependencies</button>
  HERE WE WILL BE ABLE TO CONFIGURE AND CONTROLL IKSPRESS
  <button name="ReinstallScript" onClick="">Reinstall plugin dependencies</button>

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
