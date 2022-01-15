function card() {
  const urlParams = new URLSearchParams(window.location.search);
  const userName = urlParams.get('user');
  const disc = urlParams.get('disc');
  const avatar256 = urlParams.get('avatar');
  const guildCount = urlParams.get('count');
  console.log(urlParams);
  console.log(userName);
  console.log(avatar256);
  console.log(guildCount);
  return avatar256;
}
