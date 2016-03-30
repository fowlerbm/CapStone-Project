<!-- actual game page -->
@include('app')

    <object id="UnityObject" classid="clsid:444785F1-DE89-4295-863A-D46C3A781394"
            width="420" height="750"
            codebase="http://webplayer.unity3d.com/download_webplayer/UnityWebPlayer.cab#version=2,0,0,0">
        <param name="unity3d" value="WebPlayer.unity3d" />
        <embed id="UnityEmbed" src="https://googledrive.com/host/0B5QltOX_3PRWbjdkc3R0ZEo3aVk" width="420" height="420"
            type="application/vnd.unity" pluginspage="http://www.unity3d.com/unity-web-player-2.x" />
    </object>

