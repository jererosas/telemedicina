<div>
    <h1 class="text-lg font-bold text-center">Sala de Videollamada: {{ $roomName }}</h1>
    
    <div id="video-container" class="flex justify-center items-center bg-gray-200 h-96 gap-4 p-4">
        <!-- Contenedor del video remoto -->
        <div id="remote-video" class="w-full h-full bg-black relative">
            <h2 class="absolute top-2 left-2 text-white text-sm">Participante remoto</h2>
        </div>
    </div>

    <script src="https://sdk.twilio.com/js/video/releases/2.18.1/twilio-video.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const remoteVideoContainer = document.getElementById('remote-video');

            // Conectar a la sala de Twilio Video usando el token
            Twilio.Video.connect("{{ $token }}", { name: "{{ $roomName }}" })
                .then(room => {
                    console.log(`Conectado a la sala: ${room.name}`);

                    // Manejar a los participantes remotos que ya están en la sala
                    room.participants.forEach(participant => {
                        console.log(`Participante remoto ya conectado: ${participant.identity}`);
                        handleParticipantConnected(participant);
                    });

                    // Cuando un nuevo participante se conecta
                    room.on('participantConnected', participant => {
                        console.log(`Nuevo participante conectado: ${participant.identity}`);
                        handleParticipantConnected(participant);
                    });

                    // Cuando un participante se desconecta
                    room.on('participantDisconnected', participant => {
                        console.log(`Participante desconectado: ${participant.identity}`);
                        handleParticipantDisconnected(participant);
                    });

                    // Cuando la sala se desconecta
                    room.on('disconnected', () => {
                        console.log('Te has desconectado de la sala.');
                        while (remoteVideoContainer.firstChild) {
                            remoteVideoContainer.removeChild(remoteVideoContainer.firstChild);
                        }
                    });
                })
                .catch(error => {
                    console.error('Error al conectar con la sala:', error);
                });

            // Función para manejar los tracks del participante
            function handleParticipantConnected(participant) {
                console.log(`Manejando al participante: ${participant.identity}`);

                // Manejar los tracks que ya están publicados
                participant.tracks.forEach(publication => {
                    if (publication.isSubscribed) {
                        console.log(`Track ya suscrito: ${publication.track.kind}`);
                        attachTrack(publication.track);
                    }
                });

                // Manejar nuevos tracks que se publiquen
                participant.on('trackSubscribed', track => {
                    console.log(`Nuevo track suscrito: ${track.kind}`);
                    attachTrack(track);
                });

                // Manejar tracks que se eliminen
                participant.on('trackUnsubscribed', track => {
                    console.log(`Track no suscrito: ${track.kind}`);
                    detachTrack(track);
                });
            }

            // Función para adjuntar un track (video o audio)
            function attachTrack(track) {
                if (track.kind === 'video') {
                    remoteVideoContainer.appendChild(track.attach());
                } else if (track.kind === 'audio') {
                    console.log('Audio track adjuntado');
                    document.body.appendChild(track.attach());
                }
            }

            // Función para eliminar un track
            function detachTrack(track) {
                const attachedElements = track.detach();
                attachedElements.forEach(el => el.remove());
            }

            // Función para manejar desconexiones de participantes
            function handleParticipantDisconnected(participant) {
                console.log(`Limpiando tracks de participante desconectado: ${participant.identity}`);
                participant.tracks.forEach(publication => {
                    if (publication.track) {
                        detachTrack(publication.track);
                    }
                });
            }
        });
    </script>
</div>